<?php

namespace App\Http\Controllers\Admin;

use App\Actions\UploadFileAction;
use App\Http\Controllers\Controller;
use App\Http\Resources\DoubleSlideResource;
use App\Models\DoubleSlide;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DoubleSlidesController extends Controller
{
    public function index()
    {
        return Inertia::render('DoubleSlides/Index', [
            'double_slides' => DoubleSlideResource::collection(DoubleSlide::simplePaginate(5))
        ]);
    }

    public function create()
    {
        return Inertia::render('DoubleSlides/Create', [
            'edit' => false,
            'slide' => new DoubleSlideResource(new DoubleSlide())
        ]);
    }

    public function store(Request $request, UploadFileAction $uploadFile)
    {
        $data = $request->validate([
            'title' => 'required|string|max:30',
            'title_ru' => 'required|string|max:30',
            'price' => 'required|numeric',
            'image' => 'required|image|max:1000',
            'image_sm' => 'required|image|max:500',
        ]);

        $data['image'] = $uploadFile->setFile($request->file('image'))
            ->setUploadPath((new DoubleSlide())->uploadFolder())
            ->execute();

        $data['image_sm'] = $uploadFile->setFile($request->file('image_sm'))
            ->setUploadPath((new DoubleSlide())->uploadFolder())
            ->execute();

        DoubleSlide::create($data);

        return redirect()->route('double-slides.index')
            ->with('success', 'Slide saved succesfully.');
    }

    public function edit(DoubleSlide $double_slide)
    {
        return Inertia::render('DoubleSlides/Create', [
            'edit' => true,
            'slide' => new DoubleSlideResource($double_slide)
        ]);
    }

    public function update(Request $request, DoubleSlide $double_slide, UploadFileAction $uploadFile)
    {
        $data = $request->validate([
            'title' => 'required|string|max:30',
            'title_ru' => 'required|string|max:30',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:1000',
            'image_sm' => 'nullable|image|max:500',
        ]);

        // If there is an old large image
        $data['image'] = $double_slide->image;
        // If there is an old small image
        $data['image_sm'] = $double_slide->image_sm;

        if ($request->file('image')) {
            $double_slide->deleteImage();

            $data['image'] = $uploadFile->setFile($request->file('image'))
                ->setUploadPath($double_slide->uploadFolder())
                ->execute();
        }

        if ($request->file('image_sm')) {
            $double_slide->deleteImage('image_sm');

            $data['image_sm'] = $uploadFile->setFile($request->file('image_sm'))
                ->setUploadPath($double_slide->uploadFolder())
                ->execute();
        }

        $double_slide->update($data);

        return redirect()->route('double-slides.index')
            ->with('success', 'Slide updated succesfully.');
    }

    public function destroy(DoubleSlide $double_slide)
    {
        $double_slide->deleteImage();
        $double_slide->deleteImage('image_sm');
        
        $double_slide->delete();

        return redirect()->route('double-slides.index')
            ->with('success', 'Slide deleted succesfully.');
    }
}
