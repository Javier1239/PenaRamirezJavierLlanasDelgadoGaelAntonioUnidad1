<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Ayuda al cliente-ChaeGPT</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/chaegpt.css') }}">

        <!-- Ico -->
        <link rel="icon" href="/kimc.png" type="image/png">
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="elcontenedor max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <img src="/kimc.png" width="100" alt="ChaeGPT" />
                </div>

                <div id="chat-container">
                    <div id="chat-messages" class="chat-container"></div>
                    <form id="chat-form" method="POST">
                        @csrf
                        <input type="text" id="chat-input" placeholder="¡Hola, Soy ChaeGPT!, ¿cómo puedo ayudarte?" />
                        <button type="submit">Enviar</button>
                        <button type=""><a href="{{ url('/home') }}">Volver</a></button>
                    </form>
                </div>

                <div class="text-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:ml-0">
                        ChaeGPT v1.8.0
                    </div>
                </div>
            </div>
        </div>
        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="{{ asset('js/chaegpt.js') }}"></script>
    </body>
</html>