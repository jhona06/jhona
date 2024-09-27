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

        // Pass categories to the view
        return view('home', compact('categories'));
    }
    
}
