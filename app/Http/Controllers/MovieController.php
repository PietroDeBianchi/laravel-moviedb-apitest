<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http; // Import the Http class from Laravel
use Illuminate\Http\Request; // Import the Request class from Laravel

class MovieController extends Controller // Define the DemoController class and extend the base Controller class
{

    public function movie() // Define the demo() method
    {

        // Send an HTTP GET request to the TMDB API to retrieve data for all movies
        $data = Http::asJson()
            ->get(config('services.tmdb.endpoint') . 'movie/popular' . '?api_key=' . config('services.tmdb.api'));

        // Return the demo view, passing in the retrieved data
        return view('movie', compact('data'));
    }
}
