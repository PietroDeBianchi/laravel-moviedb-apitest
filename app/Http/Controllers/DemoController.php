<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http; // Import the Http class from Laravel
use Illuminate\Http\Request; // Import the Request class from Laravel

class DemoController extends Controller // Define the DemoController class and extend the base Controller class
{

    public function demo() // Define the demo() method
    {

        $tmdb_id = 436270; // Set the TMDB ID for the "Black Adam" movie

        // Send an HTTP GET request to the TMDB API to retrieve data for the specified movie ID
        $data = Http::asJson() // Set the Accept header to "application/json"
            ->get(config('services.tmdb.endpoint') . 'movie/' . $tmdb_id . '?api_key=' . config('services.tmdb.api'));

        // Return the demo view, passing in the retrieved data
        return view('demo', compact('data'));
    }
}
