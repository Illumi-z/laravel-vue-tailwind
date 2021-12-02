<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Template</title>

        <!-- Tailwind CSS -->
        <link href="/css/app.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        
        <div id="app">

            <header class="red">
                <nav>
                    <router-link to="/">Home</router-link>
                    <router-link :to="{ name: 'about' }">About</router-link>
                </nav>
            </header>
            
            <router-view></router-view>

        </div>

        <!-- Vue JS -->
        <script src="/js/app.js"></script>
    </body>
</html>
