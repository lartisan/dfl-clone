<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
		
		<title>dress-for-less clone</title>
		
		<!-- Styles -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body class="flex flex-col justify-between">
        <header>
            <img src="{{ asset('img/logo.svg') }}" alt="" srcset="">
        </header>

        <main></main>

        <footer></footer>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>