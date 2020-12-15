@extends('layouts.app')

@section('title', 'Movies')
@section('content')
<div class="my-3 py-3">
    <h2>Movies:</h2>
        @foreach ($movies as $movie)
            <li>
            <a href="{{route('movies.show', ['movie' => $movie->id])}}">
                {{$movie->title}} 
            </a>
            <p>{{$movie->storyline}}</p>
            </li>
         @endforeach

</div>
       
@endsection