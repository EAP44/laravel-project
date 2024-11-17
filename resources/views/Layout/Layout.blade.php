<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>AWW</title>
</head>
<body class="bg-gray-200">
    <nav class="bg-gray-100">
        @include('layout.Partials.navbar')
    </nav>
    <main>
        @yield('main')
    </main>
    <footer class="bg-gray-100 fixed bottom-0 w-full mt-10 p-3">
        @include('layout.Partials.footer')
    </footer>
</body>
</html>