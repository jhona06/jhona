<?php

namespace App\Http\Controllers;

use App\Models\MenuItem; // Import the model
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::all();
        return view('menu.index', compact('menuItems'));
    }

    public function store(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|integer',
            'image' => 'nullable|string', // Adjust validation as needed
        ]);

        // Create new MenuItem
        MenuItem::create($validatedData);

        return redirect()->route('menu.index')->with('success', 'Menu Item Created Successfully');
    }
}
