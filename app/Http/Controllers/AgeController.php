<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AgeController extends Controller
{
    public function showForm()
    {
        return view('order'); // Create this view to display the age input form
    }

    public function checkAge(Request $request)
    {
        $request->validate([
            'age' => 'required|integer|min:0',
        ]);

        Session::put('age', $request->age);

        return redirect('/order'); // Redirect to the order page or another route as needed
    }
}
