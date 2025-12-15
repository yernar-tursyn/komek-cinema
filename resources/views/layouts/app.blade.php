<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Комек | Кинотеатр')</title>
    <meta name="description" content="Расписание сеансов, премьеры и онлайн-билеты кинотеатра КОМЕК.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="app-body">
    <div class="page-shell">
        @yield('content')
    </div>
</body>
</html>
