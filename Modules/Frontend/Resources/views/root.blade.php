<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <link href="{{url('favicon.ico')}}" rel="icon" type="image/x-icon">--}}
    <meta name="api-base-url" content="{{ env('APP_URL') }}" />
    <title>{{ setting('site_name') }}</title>
    <style>
        #svg_back {
            transform: translate(-50%, -50%);
        }

        #svg_path {
            animation: draw 6.5s infinite;
            animation-timing-function: linear;
        }

        @keyframes draw {
            0% {
            }
            50% {
                stroke-dashoffset: 0;
                stroke-opacity: 1;
            }
        }
    </style>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['Modules/Frontend/Resources/assets/js/app.js'])
    @spladeHead

</head>
<body class="font-monument antialiased bg-slate-900">
@splade


</body>
</html>
