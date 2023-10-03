<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>

    {{-- tailwind css --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- fotns --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,300&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    @livewireStyles()
    @livewireScripts()

</head>

<body>

    {{-- <header>
        <h1>{{ $headerTitle }}</h1>
    </header> --}}

    {{-- <nav>
        <ul>
            @foreach ($menuItems as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </nav> --}}

    <section>
        @yield('content')
    </section>

    {{-- <footer>
        <p>&copy; {{ date('M-Y') }} Blain Muema</p>
    </footer> --}}
</body>

</html>
