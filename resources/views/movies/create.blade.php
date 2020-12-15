@extends('layouts.app')

@section('title', 'Add movie')
@section('content')
    <div class="my-3 py-3">
        <h3>Add movie:</h3>
    </div>
    <form method="POST" action="/movies">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Movie title</label>
        <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title">
        @include('partials.error-message', ['field' => 'title'])
    </div>
    <div class="mb-3">
        <label for="genre" class="form-label">Movie genre</label>
        <input type="text" class="form-control" id="genre">
        @include('partials.error-message', ['field' => 'genre'])
    </div>
    <div class="mb-3">
        <label for="director" class="form-label">Director</label>
        <input type="text" class="form-control" id="director">
        @include('partials.error-message', ['field' => 'director'])
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">Year</label>
        <input type="text" class="form-control" id="year">
        @include('partials.error-message', ['field' => 'year'])
    </div>
    <div class="mb-3">
        <label for="storyline" class="form-label">Storyline</label>
        <input type="text" class="form-control" id="storyline">
        @include('partials.error-message', ['field' => 'storyline'])
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection