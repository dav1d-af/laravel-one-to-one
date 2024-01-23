<!DOCTYPE html>
<html lang="{{ str_replace('_',"-",app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="" csrf-token content="{{ csrf_token() }}">

        <title>{{ $title ?? "Laravel" }}</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;300;500;700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&family=Oswald:wght@200;400;600&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Arapey&family=Montserrat:wght@100;200;300;400;500;600;700&family=Oswald:wght@200;400;600&display=swap');

            * {
                font-family: 'Montserrat', sans-serif;
            }

            .submit {
                width: 100%;
            }
        </style>

    </head>

    <body>


        <x-partials.navbar />


        <div>
            {{ $slot }}
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

        {{ $scripts ?? '' }}

    </body>

</html>