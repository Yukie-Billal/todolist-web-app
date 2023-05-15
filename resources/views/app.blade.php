<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <x-links />

    <title>Belajar - Laravel Livewire</title>
    <livewire:styles />
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
    
    <livewire:scripts />
    <x-scripts />
    @stack('scripts')
</body>
</html>