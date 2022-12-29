<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FeedbackSlideResource;
use App\Models\FeedbackSlide;
use Illuminate\Http\Request;

class FeedbackSlidesController extends Controller
{
    public function index()
    {
        return FeedbackSlideResource::collection(FeedbackSlide::all());
    }
}
