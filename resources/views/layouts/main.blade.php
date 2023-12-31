<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    @vite('resources/js/app.js')

    <title>Laravel Model Controller</title>
</head>
<body>
    <div class="container mt-4">

        @include('partials.header')

        <main>
            <div class="mt-4">
                @yield('content')
            </div>
        </main>

    </div>
</body>
</html>
