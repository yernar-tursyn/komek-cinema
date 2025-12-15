@props(['contacts', 'socials'])

<footer class="footer shell">
    <div class="footer__top">
        <div class="footer__brand">
            <div class="brand__logo">
                <img src="/images/logo.png" alt="КОМЕК" class="brand__logo-img">
            </div>
        </div>
        <div class="footer__contacts-left">
            <a href="mailto:{{ $contacts['email'] }}" class="footer__link">{{ $contacts['email'] }}</a>
            <a href="mailto:{{ $contacts['ticketEmail'] }}" class="footer__link">{{ $contacts['ticketEmail'] }}</a>
            <span class="footer__note">{{ $contacts['address'] }}</span>
        </div>
        <div class="footer__contacts-right">
            <div class="footer__phone-wrap">
                <a href="tel:{{ preg_replace('/[^\d\+]+/', '', $contacts['phone']) }}" class="footer__link">{{ $contacts['phone'] }}</a>
                <img src="/icons/arrow-down.svg" alt="" class="footer__arrow">
            </div>
            <span class="footer__note">Касса</span>
        </div>
        <div class="footer__hours">
            <span class="footer__note">{{ $contacts['hours'] }}</span>
            <span class="footer__note">График работы</span>
        </div>
    </div>

    <div class="footer__middle">
        <div class="footer__col">
            <span class="footer__title">Меню</span>
            <a href="#" class="footer__col-link">Афиша</a>
            <a href="#" class="footer__col-link">Сеансы</a>
            <a href="#" class="footer__col-link">Пушкинская карта</a>
            <a href="#" class="footer__col-link">Кинотеатр</a>
            <a href="#" class="footer__col-link">Контакты</a>
        </div>
        <div class="footer__col footer__col--right">
            <div class="footer__title-group">
                <span class="footer__title">Способы оплаты:</span>
                <div class="payment-icons">
                    <img src="/images/MasterCard.png" alt="Mastercard" class="payment-icon payment-icon--mc">
                    <img src="/images/Visa.png" alt="Visa" class="payment-icon payment-icon--visa">
                </div>
            </div>
            <div class="footer__info">
                <span class="footer__info-text">Все сеансы начинаются с рекламно-информационного блока.</span>
                <span class="footer__info-text">Точную продолжительность сеансов можно уточнить в кинотеатре.</span>
            </div>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="footer__socials">
            @foreach ($socials as $social)
                <button class="ghost-circle" aria-label="{{ $social['label'] }}">
                    <img src="/icons/social/{{ $social['icon'] }}.svg" alt="{{ $social['label'] }}">
                </button>
            @endforeach
        </div>
        <span class="footer__copy">© 2025 Все права защищены</span>
    </div>
</footer>
