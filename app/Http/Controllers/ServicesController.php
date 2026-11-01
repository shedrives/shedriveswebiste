<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ServicesController extends Controller
{
    public function services(): View
    {
        return view('services');
    }

    public function safety(): View
    {
        return view('safety');
    }
}
