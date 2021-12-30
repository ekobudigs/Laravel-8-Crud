<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Parsinta</title>
    <link rel="stylesheet" href="/css/app.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    {{-- cara memsisipkan style 
@yield('styles') --}}

    {{ $styles }}
    {{-- menggunakan isset --}}
    {{-- @isset($styles)
{{ $styles }}   
@endisset --}}

</head>

<body>

    <x-navbar></x-navbar>
    <div class="pt-4">
        {{ $slot }}
    </div>
</body>
<script src="/js/app.js"></script>
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}

</html>
