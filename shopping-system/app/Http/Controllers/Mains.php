<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mains extends Controller
{
    //
}
Route::get('/', function () {
    return view('home');
});
