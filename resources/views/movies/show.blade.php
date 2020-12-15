@extends('layouts.app')

@section('title', 'Movies')
@section('content')
    <h1>{{$movie->title}}</h1>
    <p>{{$movie->storyline}}</p>
@endsection