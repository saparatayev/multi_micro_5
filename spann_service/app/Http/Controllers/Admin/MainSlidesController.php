<?php

namespace App\Http\Controllers\Admin;

use App\Actions\UploadFileAction;
use App\Http\Controllers\Controller;
use App\Http\Resources\MainSlideResource;
use App\Models\MainSlide;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainSlidesController extends Controller
{
    public function index()
    {
        return Inertia::render('MainSlides/Index', [
            'main_slides' => MainSlideResource::collection(MainSlide::simplePaginate(5))
        ]);
    }

    public function create()
    {
        return Inertia::render('MainSlides/Create', [
            'edit' => false,
            'slide' => new MainSlideResource(new MainSlide())
        ]);
    }

    public function store(Request $request, UploadFileAction $uploadFile)
    {
        $data = $request->validate([
            'title' => 'required|string|max:30',
            'title_ru' => 'required|string|max:30',
            'description' => 'required|string',
            'description_ru' => 'required|string',
            'image' => 'required|image|max:1000',
        ]);

        $data['image'] = $uploadFile->setFile($request->file('image'))
            ->setUploadPath((new MainSlide())->uploadFolder())
            ->execute();

        MainSlide::create($data);

        return redirect()->route('main-slides.index')
            ->with('success', 'Slide saved succesfully.');
    }

    public function edit(MainSlide $main_slide)
    {
        return Inertia::render('MainSlides/Create', [
            'edit' => true,
            'slide' => new MainSlideResource($main_slide)
        ]);
    }

    public function update(Request $request, MainSlide $main_slide, UploadFileAction $uploadFile)
    {
        $data = $request->validate([
            'title' => 'required|string|max:30',
            'title_ru' => 'required|string|max:30',
            'description' => 'required|string',
            'description_ru' => 'required|string',
            'image' => 'nullable|image|max:1000',
        ]);

        // If there is an old image
        $data['image'] = $main_slide->image;

        if ($request->file('image')) {
            $main_slide->deleteImage();

            $data['image'] = $uploadFile->setFile($request->file('image'))
                ->setUploadPath($main_slide->uploadFolder())
                ->execute();
        }

        $main_slide->update($data);

        return redirect()->route('main-slides.index')
            ->with('success', 'Slide updated succesfully.');
    }

    public function destroy(MainSlide $main_slide)
    {
        $main_slide->deleteImage();
        
        $main_slide->delete();

        return redirect()->route('main-slides.index')
            ->with('success', 'Slide deleted succesfully.');
    }
}
