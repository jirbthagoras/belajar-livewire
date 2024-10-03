<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://cdn.tailwindcss.com"></script>

        <title>Laravel</title>
    </head>
    <body>

        @livewire('clicker')

        {{-- @livewire('Parameters') --}}

    </body>
</html>
