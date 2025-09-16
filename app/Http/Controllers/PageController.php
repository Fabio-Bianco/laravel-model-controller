<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $movies = Movie::all();

        dd($movies);  // qui l'esecuzione SI FERMA

        return view('homepage', compact('movies'));
    }
}
