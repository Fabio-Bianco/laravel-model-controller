@extends('layouts.master')

@section('title', 'Homepage')

@section('content')
  <h1 class="h3">Homepage</h1>
   <p>My movies:</p>

   <ul>
    @foreach ($movies as $movie)
      <li>{{ $movie->title }}</li>
      
    
    @endforeach
   </ul>

   @endsection