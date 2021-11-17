<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet" />
</head>

<body class="antialiased">
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="gambar">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <h1>Setup Laravel Bootstrap Successfully</h1>
    <i class="fab fa-adversal fa-3x"></i>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>