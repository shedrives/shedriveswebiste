<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController extends Controller
{
    public function about(): View
    {
        return view('about');
    }

    public function meetfounder(): View
    {
        return view('meetfounder');
    }

    public function mission(): View
    {
        return view('mission');
    }
}
