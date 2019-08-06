<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @include('components.head')
</head>
<body>
    <div class="container">
        @include('components.header')

        @yield('content')

        @include('components.footer')
    </div>

    @yield('js')

    <script src="/js/app.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
