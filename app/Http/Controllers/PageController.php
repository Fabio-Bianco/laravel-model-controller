<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        // Recupera tutti i film dal DB
        $movies = Movie::all();

        // Associa manualmente le immagini ai film tramite ID
        // Puoi adattare i nomi file in base ai tuoi reali .jpg/.jpeg in public/img/
        $posters = [
            1 => 'padrino.jpeg',
            2 => 'via-col-vento.jpg',
            3 => 'psycho.jpg',
            4 => 'gravity.jpg',
            5 => 'toy-story.jpg',
            6 => 'pulp-fiction.jpg',
            7 => 'forrest-gump.jpg',
            8 => 'guerre-stellari.jpg',
            9 => 'et.jpg',
            10 => 'silenzio-degli.innocenti.jpg',
        ];

        // Passiamo anche $posters alla view
        return view('homepage', compact('movies', 'posters'));
    }
}
