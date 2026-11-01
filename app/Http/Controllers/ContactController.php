<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function contact(): View
    {
        return view('contact');
    }

    public function policy(): View
    {
        return view('policy');
    }

    public function collabrate(): View
    {
        return view('collabrate');
    }

    public function privacy(): View
    {
        return view('privacy');
    }

    public function terms(): View
    {
        return view('terms');
    }

    public function event(): View
    {
        return view('event');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:120'],
            'last_name' => ['nullable', 'string', 'max:120'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        Log::info('Contact inquiry submitted', $validated);

        return redirect()
            ->route('contact')
            ->with('success', 'Thanks! Your message has been received.');
    }
}
