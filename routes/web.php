<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;


//home
Route::get('/', [HomeController::class, 'home'])->name('home');

//about
Route::get('About', [AboutController::class, 'about'])->name('about');
Route::get('MeetOurFounder', [AboutController::class, 'meetfounder'])->name('meetfounder');
Route::get('Mission&vission', [AboutController::class, 'mission'])->name('mission');

//Services
Route::get('Services', [ServicesController::class, 'services'])->name('services');
Route::get('Safety', [ServicesController::class, 'safety'])->name('safety');

//Contact

Route::get('/links', function () {
    return view('links');
})->name('links');

Route::get('Contact', [ContactController::class, 'contact'])->name('contact');
Route::get('Policy&Rules', [ContactController::class, 'policy'])->name('policy');
Route::get('Collabrate', [ContactController::class, 'collabrate'])->name('collabrate');
Route::get('PrivacyPolicy', [ContactController::class, 'privacy'])->name('privacy');
Route::get('Terms&conditions', [ContactController::class, 'terms'])->name('terms');
Route::get('Event', [ContactController::class, 'event'])->name('event');
Route::post('/contact-submit', [ContactController::class, 'store'])->name('contact.store');
