<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{

    // In ThemeController.php
public function index()
{
    // Return a view that lists the available themes
    return view('themes.index'); // Ensure you have this view created
}

    //
    // Function to switch themes
    public function switchTheme($theme)
    {
        // You can store the theme choice in session or in the user model
        session(['theme' => $theme]);

    // Redirect back to theme index page
    return redirect()->route('themes.index');
    }
}
