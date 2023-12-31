<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Livewire Data Table</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- <style>
        body {
            /* background-color: #181A1B;
            color: #fff; */
            font-family: 'Nunito';
        }
    </style> --}}

    @livewireStyles()
    @livewireScripts()

</head>

<body>
    @include('includes.nav')

    <div class="mx-auto py-5 container">
        @yield('content')
    </div>

    @include('includes.footer')
</body>

</html>
