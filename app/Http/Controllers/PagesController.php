<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

// Use "return view()" to display an HTML page
// User "retun redirect()" to pass to the controller-based pages

class PagesController extends Controller
{
    // Home and Index are both the root of the site
    public function index(): RedirectResponse
    {
        return redirect('Books');
    }

    public function home(): RedirectResponse
    {
        return redirect('Books');
    }

    public function authors(): RedirectResponse
    {
        return redirect('Authors');
    }

    public function genres(): View
    {
        return view('pages.genres');
    }

    public function series(): View
    {
        return view('pages.series');
    }
}
