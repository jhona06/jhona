<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $query = MenuItem::query();

        if ($request->has('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->input('search') . '%');
        }

        $menuItems = $query->get();

        return view('home', compact('categories', 'menuItems'));
    }
    public function index()
    {
        // Retrieve categories from the database
        $categories = Category::all(); // Or however you're retrieving categories

        // Pass the categories variable to the view
        return view('home', compact('categories')); // Using compact to pass variables
    }
}
