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
    <div class="container-fluid p-0" style="height: 100vh">
        <div class="row h-100 m-0">
            <div class="col-2 h-100 bg-secondary">Sidebar</div>
            <div class="col-10 h-100 bg-light">Content</div>
        </div>
    </div>
    {{-- <div class="container-fluid row">
        <aside class="col-2 justify-content-center">
            <h1>Todo App</h1>
            <p>Management Kegiatan anda dimasa depan.</p>
        </aside>
        <div class="col-10">
            @include('layouts.navbar')
        </div>
        <div class="container-fluid py-4">
            {{ $slot }}
        </div>
        
    </div> --}}
    <livewire:scripts />
    <x-scripts />
    @stack('scripts')
</body>
</html>