<?php

namespace App\Http\Controllers;

// Use "return view()" to display an HTML page
// User "retun redirect()" to pass to the controller-based pages

class PagesController extends Controller
{
    // Home and Index are both the root of the site
    public function index()
    {
        return redirect('Books');
    }

    public function home()
    {
        return redirect('Books');
    }

    public function authors()
    {
        return redirect('Authors');
    }

    public function genres()
    {
        return view('pages.genres');
    }

    public function series()
    {
        return view('pages.series');
    }
}
