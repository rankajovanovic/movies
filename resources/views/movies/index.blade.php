@extends('layouts.app')

@section('title', 'Movies')
@section('content')
        @foreach ($movies as $movie)
            <li>
            <a href="{{route('movies.show', ['movie' => $movie->id])}}">
                {{$movie->title}} 
            </a>
            <p>{{$movie->storyline}}</p>
            </li>
         @endforeach
@endsection