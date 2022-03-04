<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <main class="container">
        @foreach ($movie as $key => $valore)
            <div class="film-container">
                <p>TITLE: {{ $valore['title'] }}</p>
                <p>ORIGINAL TITLE: {{ $valore['original_title'] }}</p>
                <p>NATIONALITY: {{ $valore['nationality'] }}</p>
                <p>DATE: {{ $valore['date'] }}</p>
                <p>VOTE: {{ $valore['vote'] }}</p>
            </div>
        @endforeach
    </main>
</body>

</html>
