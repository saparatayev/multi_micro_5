<?php

namespace App\Http\Controllers\Api;

use App\Events\ContactFormEvent;
use App\Http\Controllers\Controller;
use App\Mail\SendUserInfoMail;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'string', 'email', 'max:50'],
            'phone' => ['nullable', 'string', 'max:20'],
            // 'message' => ['required', 'string', 'max:200'],
        ]);

        try {

            event(new ContactFormEvent($data));

            return response()->json([
                'message' => 'Your message has been submitted successfully.',
            ], 201);

        } catch (\Throwable $th) {
            
            info($th);
            
            return response()->json([
                'message' => 'Your message has not been submitted.',
            ], 500);
        }
    }
}
