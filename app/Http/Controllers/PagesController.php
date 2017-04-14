<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage()
    {
        return view('front.home.page');
    }

    public function weddings()
    {
        return view('front.weddings.page');
    }

    public function accommodation()
    {
        return view('front.accommodation.page');
    }

    public function functions()
    {
        return view('front.functions.page');
    }

    public function gallery()
    {
        return view('front.gallery.page');
    }
}
