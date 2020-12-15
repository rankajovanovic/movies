<html>
    <head>
        <title>Movies</title>
    </head>

    <body>
        @foreach ($movies as $movie)
            <li>
            <a href="{{route('movies.show', ['movie' => $movie->id])}}">
                {{$movie->title}} 
            </a>
            <p>{{$movie->storyline}}</p>
            </li>
         @endforeach
    </body>
</html>