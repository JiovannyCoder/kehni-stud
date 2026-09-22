<!DOCTYPE html>
<html lang="fr" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'KehniStud' }}</title>

    @vite(['resources/css/app.css'])

    @livewireStyles
    @filamentStyles
</head>

<body class="h-full antialiased text-gray-900 bg-gray-50">
    <x-main-navbar></x-main-navbar>
    <main class="px-4 py-12 sm:px-6 lg:px-8">
        {{ $slot }}
    </main>
    <x-main-footer></x-main-footer>
    
    @livewireScripts
    @filamentScripts
</body>

</html>
