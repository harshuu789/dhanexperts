<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

abstract class Controller
{
       public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->to('yourcompanyemail@example.com')
                    ->subject('New Contact Form Message');
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
