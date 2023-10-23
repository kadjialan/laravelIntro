<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// all listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest listings',
        'listings' => Listing::all() 
    ]); 
});

// single listing  
Route::get('/listings/{id}', function($id) {
    return view('listing', [
        "listing" => Listing::find($id)
    ]);
});


// added by me for trials
Route::get('/free', function () {
    return response('<h1>welcome kadji<h1>');
});

Route::get('/post/{id}', function ($id) {
    return response('post ' . $id);
});


Route::get('/search', function (Request $request) {
    dd($request);
});
