<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch categories from the database
        $categories = Category::all();
        $menuItems = MenuItem::all(); // Fetch all menu items

        // Pass categories to the view
        // Pass both categories and menuItems to the view
        return view('home', [
            'categories' => $categories,
            'menuItems' => $menuItems,
        ]);
    }
    
}
