@extends('layouts.app')

@section('title', 'Movies')
@section('content')

    <h1>{{$movie->title}}</h1>
    <p>Genre: {{$movie->genre}}</p>
    <p>Director: {{$movie->director}}</p>
    <p>Year: {{$movie->year}}</p>
    <p>{{$movie->storyline}}</p>
@endsection