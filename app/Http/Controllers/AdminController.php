<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (! Auth::check()) {
            return redirect()->route('login'); // Redirect if not authenticated
        }

        return view('admin.board'); // Load admin dashboard
    }
}
