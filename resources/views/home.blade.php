<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <header>

            <a href="{{ route('about') }}"> Vai a about </a>

            <a href="{{ route('info') }}"> Vai a info </a>

            <a href="{{ route('help') }}"> Vai a help </a>

        </header>


        <h1> Hello world! </h1>

        <h2 style="color:red">MOVIES:</h2>
        <ul>
            @foreach($movies as $movie)  
                <li> {{ $movie }} </li>
            @endforeach
        </ul>
        
     

    </body>
</html>
