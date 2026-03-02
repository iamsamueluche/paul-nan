<?php

use App\Http\Controllers\RsvpController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index');
Route::view('/ourstory', 'pages.ourstory');
Route::view('/programme', 'pages.programme');
Route::view('/programmedetail', 'pages.programmedetail');
Route::view('/gallery', 'pages.gallery');
Route::view('/gallerydetail', 'pages.gallerydetail');
Route::view('/weddingdetails', 'pages.weddingdetails');
Route::view('/weddingpost', 'pages.weddingpost');
Route::view('/rsvp', 'pages.rsvp');

Route::post('/rsvp-submit', [RsvpController::class, 'store'])->name('rsvp.submit');
