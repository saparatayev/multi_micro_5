<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DoubleSlideResource;
use App\Models\DoubleSlide;
use Illuminate\Http\Request;

class DoubleSlidesController extends Controller
{
    public function index()
    {
        return DoubleSlideResource::collection(DoubleSlide::all());
    }
}
