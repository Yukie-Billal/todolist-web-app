<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <x-links />

    <title>Todolist - {{ $title }}</title>
    <livewire:styles />
</head>
<body>
    <div class="container-fluid d-flex p-0" style="height: 100vh">
        <x-sidebar />
        <div class="content w-100" style="margin-left: 240px; transition: .5s">
            <x-nav />
            {{ $slot }}
        </div>
    </div>
    <livewire:scripts />
    <x-scripts />
    @stack('scripts')
</body>
</html>