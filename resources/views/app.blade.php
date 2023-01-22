<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">

    <style>
        a {
            text-decoration: none
        }
    </style>

    <title>Belajar - Laravel Livewire</title>
</head>
<body>
    <div class="container-fluid" style="height: 100vh">
        <div class="row h-100">
            @include('layouts.navbar')
        </div>
    </div>
</body>
</html>