<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script type="{{ mix('js/app.js') }}"></script>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      <header>
        <h1>

          Hello World Header

        </h1>
      </header>

      @if ($errors->all())

        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        @if (session('success'))
        <div class="alert alert-danger">
            <div class="container">
                {{ session('success') }}
            </div>
        </div>
        @endif
      @yield('content')

      <footer>
        <h1>Hello World Footer</h1>
      </footer>
    </body>
</html>
