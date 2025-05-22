<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
   <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 flex">            
            <!-- Page Heading -->         
              <header class="bg-white shadow flex justify-between items-center px-6 py-4 border-b">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800">Overview</h2>
                </div>
                <div class="flex items-center gap-4">
                    <select class="border rounded px-2 py-1 text-sm text-gray-700">
                        <option>Week</option>
                        <option>Month</option>
                    </select>
                    <button class="text-gray-600 hover:text-red-600">🔔</button>
                    <button class="text-gray-600 hover:text-red-600">👤</button>
                </div>
            </header>   
            @include('layouts.navigation')   
                     
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
