<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>albums-api</title>
</head>
<body class="bg-gray-100">
@include('partials.navigation')

<div class="container px-2 m-auto" id="app">
    <div class="py-2" id="content">
        @yield('content')
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
