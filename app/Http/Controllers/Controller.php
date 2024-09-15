<?php

namespace App\Http\Controllers;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Fetch all menu items from the database
        $menuItems = MenuItem::all();
        // Return the view with menu items
        return view('home', compact('menuItems'));
    }

    public function show($id)
    {
        // Find a specific menu item by ID
        $menuItem = MenuItem::findOrFail($id);
        // Return the view with the specific menu item
        return view('menu.show', compact('menuItem'));
    }
}
