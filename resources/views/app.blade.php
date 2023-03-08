<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <style>
        body {
            background: rgb(0, 119, 255, .5);
        }
        a {
            text-decoration: none;
            color: #010101;
            transition: .1s;
        }
    </style>

    <title>Belajar - Laravel Livewire</title>
</head>
<body>

    <div class="container-fluid" style="height: 100vh">
        <div class="row">
            @include('layouts.navbar')
        </div>
        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </div>
    
    
    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>