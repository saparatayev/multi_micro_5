<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MainSlideResource;
use App\Models\MainSlide;
use Illuminate\Http\Request;

class MainSlidesController extends Controller
{
    public function index()
    {
        return MainSlideResource::collection(MainSlide::all());
    }
}
