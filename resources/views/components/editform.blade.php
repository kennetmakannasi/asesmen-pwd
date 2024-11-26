<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>{{ config('app.name', 'Laravel') }}</title>

    </head>
    <body class="">
        <a href= @yield('link')>
            <svg class="absolute hover:bg-gray-200 hover:rounded-full" xmlns="http://www.w3.org/2000/svg" width="5em" height="5em" viewBox="0 0 512 512"><path fill="#dc2626" d="M321.94 98L158.82 237.78a24 24 0 0 0 0 36.44L321.94 414c15.57 13.34 39.62 2.28 39.62-18.22v-279.6c0-20.5-24.05-31.56-39.62-18.18"/></svg>
        </a>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white">

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-lg overflow-hidden sm:rounded-lg">
                @yield('content')
            </div>
        </div>
    </body>
</html>
