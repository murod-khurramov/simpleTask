<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function calendar()
    {
        return view('calendar');
    }

    public function days()
    {
        return view('days');
    }

    public function project()
    {
        return view('project');
    }
}
