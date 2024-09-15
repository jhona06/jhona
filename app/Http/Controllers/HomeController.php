<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $query = MenuItem::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%");
        }

          // Get menu items based on the selected category or all items if no category is selected
          $category_id = $request->query('category_id');
          $menuItems = $category_id 
              ? MenuItem::where('category_id', $category_id)->get()
              : MenuItem::all();
  
          return view('home', compact('categories', 'menuItems'));

        $menuItems = $query->get();

        return view('home', compact('menuItems', 'categories'));
    }
}
