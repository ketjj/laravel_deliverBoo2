<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link of front/style.css ---->goes here --}}
    <title>DeliverBoo</title>
</head>
<body>
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
    {{-- vue app goes here --}}

    Sito Pubblico
    {{-- script of js/front.js -->goes here  --}}

</body>
</html>