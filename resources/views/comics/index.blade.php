<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>comics</title>
</head>
<body>
    <h1>COMICS LIST: </h1>
    <ul>
        @foreach ($comics as $comic)
        <li>
            <h2>TITOLO: {{$comic->title}}</h2>
            <h3>TITOLO ORIGINALE: {{$comic->original_title}}</h3>
            <p>AUTORE: {{$comic->author}}</p>
            <p>EDIZIONE: {{$comic->edition}}</p>
            <p>NUMERO: {{$comic->number}}</p>
            <p>NUMERO PAGINE: {{$comic->num_pages}}</p>
            <p>RILASCIO: {{$comic->release}}</p>
            <p>PREZZO: {{$comic->price}}</p>
            <p>COLORATO: {{$comic->colored}}</p>
            <img src="{{$comic->cover}}" alt="{{$comic->title}}">    
        </li>    
        @endforeach
    </ul>
</body>
</html> 

