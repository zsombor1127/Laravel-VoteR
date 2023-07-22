<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/7f8f824712.js" crossorigin="anonymous"></script>

    <!-- App resources -->
    <script src="{{ asset('resources/js/alert.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('resources/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/error.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
    <header>
        <h1><i class="fas fa-comment-dots"></i> {{ config('app.name') }}</h1>
    </header>

    <main>
        <div class='alert-section'>
            @include('voter.error')
        </div>

        <div class='layout'>
            @yield('content')
        </div>
    </main>
</body>
</html>