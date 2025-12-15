@extends('layouts.app')

@section('title', 'КОМЕК | Афиша')

@section('content')
    <x-layout.header :contacts="$contacts" :socials="$socials" />

    <main class="content">
        <section class="nav-strip shell">
            <div class="nav-tabs">
                @foreach ($navLinks as $link)
                    <button class="tab {{ $link['active'] ? 'is-active' : '' }}" type="button">{{ $link['label'] }}</button>
                @endforeach
            </div>
            <div class="nav-actions">
                <a class="btn btn-ghost" href="#signin">Войти</a>
                <a class="btn btn-primary" href="#review">Написать отзыв</a>
            </div>
        </section>

        <section class="date-strip shell" aria-label="Выбор даты">
            @foreach ($dateFilters as $index => $date)
                <button class="pill {{ $index === 0 ? 'is-active' : '' }}" type="button">{{ $date['label'] }}</button>
            @endforeach
        </section>

        <section class="movies shell">
            <div class="movies__grid">
                @foreach ($movies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </section>
    </main>

    <x-layout.footer :contacts="$contacts" :socials="$socials" />
@endsection
