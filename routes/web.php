<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $navLinks = [
        ['label' => 'Афиша', 'active' => true],
        ['label' => 'Сеансы', 'active' => false],
        ['label' => 'Кинотеатр', 'active' => false],
        ['label' => 'Контакты', 'active' => false],
    ];

    $dateFilters = [
        ['label' => 'Сегодня', 'date' => ''],
        ['label' => 'Завтра', 'date' => ''],
        ['label' => 'Воскресенье, 10 сент.', 'date' => ''],
        ['label' => 'Понедельник, 11 сент.', 'date' => ''],
        ['label' => 'Вторник, 12 сент.', 'date' => ''],
        ['label' => 'Среда, 13 сент.', 'date' => ''],
    ];

    $movies = [
        [
            'title' => 'Праздники',
            'age' => '12+',
            'genres' => ['комедия'],
            'poster' => '/images/movies/holidays.png',
            'sessions' => [
                ['time' => '15:35', 'format' => '2D', 'price' => '1233', 'hall' => 'Зал 3'],
                ['time' => '17:40', 'format' => '2D', 'price' => '3080', 'hall' => 'Зал 6 VIP'],
                ['time' => '19:15', 'format' => '2D', 'price' => '1700', 'hall' => 'Зал 4'],
                ['time' => '21:05', 'format' => '2D', 'price' => '1700', 'hall' => 'Зал 3'],
                ['time' => '21:40', 'format' => '2D', 'price' => '4030', 'hall' => 'Зал 6 VIP'],
                ['time' => '22:45', 'format' => '2D', 'price' => '1700', 'hall' => 'Зал 3'],
            ],
        ],
        [
            'title' => 'Мег 2: Бездна',
            'age' => '16+',
            'genres' => ['экшен', 'триллер'],
            'poster' => '/images/movies/meg-2.png',
            'sessions' => [
                ['time' => '15:35', 'format' => '2D', 'price' => '4030', 'hall' => 'Зал 6 VIP'],
                ['time' => '17:40', 'format' => '2D', 'price' => '3080', 'hall' => 'Зал 2 Ауro'],
                ['time' => '19:15', 'format' => '2D', 'price' => '1700', 'hall' => 'Зал 4'],
            ],
        ],
        [
            'title' => 'Заложники',
            'age' => '16+',
            'genres' => ['экшен', 'триллер'],
            'poster' => '/images/movies/hostage.png',
            'sessions' => [
                ['time' => '16:10', 'format' => '2D', 'price' => '4030', 'hall' => 'Зал 1'],
                ['time' => '21:30', 'format' => '2D', 'price' => '3080', 'hall' => 'Зал 1'],
            ],
        ],
        [
            'title' => 'Леди Баг и Супер-Кот: Пробуждение силы',
            'age' => '6+',
            'genres' => ['фэнтези', 'боевик', 'мелодрама', 'мультфильм', 'комедия'],
            'poster' => '/images/movies/ladybug.png',
            'sessions' => [
                ['time' => '16:10', 'format' => '2D', 'price' => '4030', 'hall' => 'Зал 1'],
                ['time' => '21:30', 'format' => '2D', 'price' => '3080', 'hall' => 'Зал 1'],
            ],
        ],
        [
            'title' => 'Когда не загрузилась афиша',
            'age' => '6+',
            'genres' => ['комедия'],
            'poster' => '/images/movies/placeholder.png',
            'isPremiere' => true,
            'sessions' => [
                ['time' => '15:35', 'format' => '2D', 'price' => '1233', 'hall' => 'Зал 3'],
                ['time' => '17:40', 'format' => '2D', 'price' => '3080', 'hall' => 'Зал 6 VIP'],
            ],
            'isFallback' => true,
        ],
        [
            'title' => 'Руслан и Людмила. Больше, чем сказка',
            'age' => '6+',
            'genres' => ['анимационное приключение'],
            'poster' => '/images/movies/ruslan.png',
            'isPremiere' => true,
            'sessions' => [],
            'preorder' => true,
        ],
    ];

    $contacts = [
        'city' => 'Казахстан',
        'address' => 'улица Тестовая 1',
        'phone' => '+7 (775) 000 00 01',
        'email' => 'admin@example.com',
        'ticketEmail' => 'ticket@example.com',
        'hours' => '08:00 - 22:00 с пн.-пт.',
    ];

    $socials = [
        ['label' => 'Facebook', 'icon' => 'facebook'],
        ['label' => 'Instagram', 'icon' => 'instagram'],
        ['label' => 'YouTube', 'icon' => 'youtube'],
        ['label' => 'VK', 'icon' => 'vk'],
    ];

    return view('home', compact('navLinks', 'dateFilters', 'movies', 'contacts', 'socials'));
});
