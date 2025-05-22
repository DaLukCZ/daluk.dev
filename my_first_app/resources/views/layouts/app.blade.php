<!DOCTYPE html>
<html lang="cs" class="">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Portfolio') }}</title>
    @vite('resources/css/frontend.css')
    @vite('resources/js/frontend.js')
</head>

<body class="bg-white text-slate-900 dark:bg-slate-900 dark:text-white font-sans">
    @yield('content')
</body>

</html>
