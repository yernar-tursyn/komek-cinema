@props(['contacts', 'socials'])

<header class="hero">
    <div class="hero__banner">
        <div class="hero__backdrop"></div>
    </div>
        <div class="hero__content shell">
            <div class="hero__top">
                <div class="brand">
                    <div class="brand__logo">
                    <img src="/images/logo.png" alt="КОМЕК" class="brand__logo-img">
                    </div>
                    <div class="brand__location">
                        <span class="text-strong">{{ $contacts['city'] }}</span>
                        <span class="text-muted">{{ $contacts['address'] }}</span>
                    </div>
                </div>
                <div class="contact">
                <div class="contact__phone-wrap">
                    <a class="contact__phone" href="tel:{{ preg_replace('/[^\d\+]+/', '', $contacts['phone']) }}">{{ $contacts['phone'] }}</a>
                    <span class="contact__arrow" aria-hidden="true">
                            <img src="/icons/arrow-down.svg" alt="">
                    </span>
                </div>
                <span class="text-muted">Касса</span>
            </div>
                <div class="hero__buttons">
                    <div class="hero__socials">
                        @foreach ($socials as $social)
                            <button class="ghost-circle" aria-label="{{ $social['label'] }}">
                            <img src="/icons/social/{{ $social['icon'] }}.svg" alt="{{ $social['label'] }}">
                            </button>
                        @endforeach
                    </div>
                    <a class="btn btn-light" href="#ticket">Мне пришёл билет</a>
            </div>
        </div>
    </div>
</header>
