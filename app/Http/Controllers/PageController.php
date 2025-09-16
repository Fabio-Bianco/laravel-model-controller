<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        // Query dei film: NON si tocca.
        $movies = Movie::all();

        return view('homepage', compact('movies'));
    }
}
