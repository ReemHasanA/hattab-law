<?php

namespace App\Http\Controllers;

use App\Models\Practice;

class HomeController extends Controller
{
    public function home()
    {
        $practices = Practice::all();

        return view('home.index', compact('practices'));
    }

    public function about()
    {
        $practices = Practice::all();

        return view('home.about', compact('practices'));
    }

    public function contact()
    {
        $practices = Practice::all();

        return view('home.contact', compact('practices'));
    }
}
