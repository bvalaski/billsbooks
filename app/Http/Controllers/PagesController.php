<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Home and Index are both the root of the site
    public function index() {
        return view('pages.index');
    }

    public function home() {
        return view('pages.index');
    }

    public function authors() {
        return view('pages.authors');
    }

    public function genres() {
        return view('pages.genres');
    }

    public function series() {
        return view('pages.series');
    }
}
