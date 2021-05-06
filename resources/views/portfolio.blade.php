<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
</head>
<body>

    @foreach($portfolio as $port)
    <div>
        <li>
            <ol>{{$port->nama_porto}}</ol>
            <ol>{{$port->nama_client}}</ol>
            <ol>{{$port->social_client}}</ol>
            <ol>{{$port->website_client}}</ol>
            <ol>{{$port->url}}</ol>
        </li>
    </div>
    @endforeach
    
    
</body>
</html>