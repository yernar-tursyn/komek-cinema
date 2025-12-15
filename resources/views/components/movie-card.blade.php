@props(['movie'])

<article class="movie-card {{ $movie['isFallback'] ?? false ? 'movie-card--muted' : '' }}">
    <div class="movie-card__media">
        <img src="{{ $movie['poster'] }}" alt="{{ $movie['title'] }}" loading="lazy">
        <div class="movie-card__badges">
            @if(!empty($movie['isPremiere']))
                <span class="chip chip--accent">Премьера</span>
            @endif
        </div>
    </div>
    <div class="movie-card__body">
        <h3 class="movie-card__title">
            {{ $movie['title'] }}
            <div class="movie-card__genres">
                @foreach ($movie['genres'] as $genre)
                    <span class="movie-card__meta-text">{{ $genre }}</span>
                @endforeach
            </div>
        </h3>

        @if (!empty($movie['sessions']))
            <div class="sessions">
                @foreach ($movie['sessions'] as $session)
                    <button class="session" type="button">
                        <div class="session__time">{{ is_array($session) ? $session['time'] : $session }}</div>
                        @if(is_array($session))
                            <div class="session__info">
                                <span class="session__format">{{ $session['format'] }}</span>
                                <span class="session__price">{{ $session['price'] }} ₸</span>
                            </div>
                            <div class="session__hall">{{ $session['hall'] }}</div>
                        @endif
                    </button>
                @endforeach
            </div>
        @else
            <div class="sessions sessions--empty">
                <span>Сеансы на Завтра</span>
            </div>
        @endif
    </div>
</article>
