@extends('layouts.master')

@section('title', 'Homepage')

@section('content')
<div class="container">
    <h1 class="h3 mb-4 text-center">My Movies</h1>

    @if($movies->isEmpty())
        <div class="alert alert-warning text-center">
            Nessun film presente (ancora). Aggiungine qualcuno e ricarica la pagina.
        </div>
    @else
        <div class="row g-4">
            @foreach ($movies as $movie)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm movie-card">
                        {{-- Placeholder poster: potrai sostituirlo con $movie->poster quando lo aggiungerai --}}
          
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-2 text-truncate" title="{{ $movie->title }}">
                                {{ $movie->title }}
                            </h5>

                            {{-- Segnaposto: qui in futuro descrizione, generi, anno, voto --}}
                            <p class="card-text text-muted small flex-grow-1">
                                Dettagli in arrivo…
                            </p>

                            <a href="#" class="btn btn-primary btn-sm mt-2 w-100">Scopri di più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
