<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoviePageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function series()
    {
        // push the return to from web.php
        return view('serie');
    }
}
