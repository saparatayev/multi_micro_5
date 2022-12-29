<?php

namespace App\Http\Controllers\Admin;

use App\Actions\UploadFileAction;
use App\Http\Controllers\Controller;
use App\Http\Resources\FeedbackSlideResource;
use App\Models\FeedbackSlide;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FeedbackSlidesController extends Controller
{
    public function index()
    {
        return Inertia::render('FeedbackSlides/Index', [
            'feedback_slides' => FeedbackSlideResource::collection(FeedbackSlide::simplePaginate(5))
        ]);
    }

    public function create()
    {
        return Inertia::render('FeedbackSlides/Create', [
            'edit' => false,
            'slide' => new FeedbackSlideResource(new FeedbackSlide())
        ]);
    }

    public function store(Request $request, UploadFileAction $uploadFile)
    {
        $data = $request->validate([
            'name' => 'required|string|max:20',
            'name_ru' => 'required|string|max:20',
            'city' => 'required|string|max:20',
            'city_ru' => 'required|string|max:20',
            'youtube_link' => 'nullable|string',
            'feedback' => 'required|string',
            'image' => 'required|image|max:100',
            'image_customer' => 'required|image|max:50',
        ]);

        $data['image'] = $uploadFile->setFile($request->file('image'))
            ->setUploadPath((new FeedbackSlide())->uploadFolder())
            ->execute();

        $data['image_customer'] = $uploadFile->setFile($request->file('image_customer'))
            ->setUploadPath((new FeedbackSlide())->uploadFolder())
            ->execute();

        FeedbackSlide::create($data);

        return redirect()->route('feedback-slides.index')
            ->with('success', 'Slide saved succesfully.');
    }

    public function edit(FeedbackSlide $feedback_slide)
    {
        return Inertia::render('FeedbackSlides/Create', [
            'edit' => true,
            'slide' => new FeedbackSlideResource($feedback_slide)
        ]);
    }

    public function update(Request $request, FeedbackSlide $feedback_slide, UploadFileAction $uploadFile)
    {
        $data = $request->validate([
            'name' => 'required|string|max:20',
            'name_ru' => 'required|string|max:20',
            'city' => 'required|string|max:20',
            'city_ru' => 'required|string|max:20',
            'youtube_link' => 'nullable|string',
            'feedback' => 'required|string',
            'image' => 'nullable|image|max:100',
            'image_customer' => 'nullable|image|max:50',
        ]);

        // If there is an old feedback image
        $data['image'] = $feedback_slide->image;
        // If there is an old customer image
        $data['image_customer'] = $feedback_slide->image_customer;

        if ($request->file('image')) {
            $feedback_slide->deleteImage();

            $data['image'] = $uploadFile->setFile($request->file('image'))
                ->setUploadPath($feedback_slide->uploadFolder())
                ->execute();
        }

        if ($request->file('image_customer')) {
            $feedback_slide->deleteImage('image_customer');

            $data['image_customer'] = $uploadFile->setFile($request->file('image_customer'))
                ->setUploadPath($feedback_slide->uploadFolder())
                ->execute();
        }

        $feedback_slide->update($data);

        return redirect()->route('feedback-slides.index')
            ->with('success', 'Slide updated succesfully.');
    }

    public function destroy(FeedbackSlide $feedback_slide)
    {
        $feedback_slide->deleteImage();
        $feedback_slide->deleteImage('image_customer');
        
        $feedback_slide->delete();

        return redirect()->route('feedback-slides.index')
            ->with('success', 'Slide deleted succesfully.');
    }
}
