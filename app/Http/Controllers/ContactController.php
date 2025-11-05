<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function emailSend(Request $request)
{
    $validated = $request->validate([
        'name'    => 'nullable|string|max:255',
        'email'   => 'nullable|email',
        'phone'   => 'nullable|string|max:10',
        'message' => 'nullable|string',
    ]);

    // Rename message to avoid collision
    $data = [
        'name'        => $validated['name'] ?? 'N/A',
        'email'       => $validated['email'] ?? 'N/A',
        'phone'       => $validated['phone'] ?? 'N/A',
        'userMessage' => $validated['message'] ?? '',
    ];

    Mail::send('email', $data, function ($mail) {
        $mail->to('dhanxpertsolutions@gmail.com')->subject('New Customer Inquiry');
    });

    return back()->with('success', 'Your message has been sent successfully!');
}

    
}
