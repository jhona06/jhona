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

        // Pass the menu items to the view
        return view('home', ['menuItems' => $menuItems]);
    }
}
