<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        // Handle contact form submission
        // For simplicity, you can validate and save the data here
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // For now, just redirect back with a success message
        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }
}
