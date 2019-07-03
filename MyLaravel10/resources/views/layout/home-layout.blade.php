<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ mix('js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <h1>Hello World</h1>
        </div>
        @yield('content')
    </body>
</html>
