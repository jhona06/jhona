<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all menu items from the database
        $menuItems = MenuItem::all();  // This retrieves all items from the 'menu_items' table

        // Pass the menu items to the view
        return view('home', compact('menuItems'));
    }
}

