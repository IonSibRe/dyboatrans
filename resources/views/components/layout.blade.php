<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dyboa Trans</title>
</head>

<body>
    {{-- Nav --}}
    <nav class="nav">
        <div class="nav-inner">
            <div class="nav-logo-wrap">
                <img src="{{" imgs/nav/nav-logo.svg"}}" alt="Nav Logo" class="nav-logo">
            </div>
            <div class="nav-links-wrap">
                <a href="/" class="nav-link nav-link-active">úvod</a>
                <a href="/services" class="nav-link">služby</a>
                <a href="/vehicles" class="nav-link">vozový park</a>
                <a href="/trips" class="nav-link">zájezdy</a>
                <a href="/contact" class="nav-link">kontakt</a>
            </div>
            <div class="nav-info-wrap">
                <a href="" class="nav-info-order-btn">
                    <i class="fa-solid fa-bus"></i>
                    objednávka
                </a>
                <div class="nav-info-phone-num-wrap">
                    <div class="nav-info-phone-num-icon-wrap">
                        <img src="{{" imgs/nav/phone-icon.svg"}}" alt="" class="nav-info-phone-num-icon">
                    </div>
                    <div class="nav-info-phone-num-text-wrap">
                        <p class="nav-info-phone-num-text">objednávky</p>
                        <p class="nav-info-phone-num-text">+420 725 675 021</p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    {{-- Nav Mobile --}}
    <nav class="nav-mobile">
        <div class="nav-mobile-inner">
            <div class="nav-mobile-logo-wrap">
                <a href="/">
                    <img src="{{asset('imgs/nav/nav-mobile-logo.svg')}}" alt="Nav Mobile Logo" class="nav-mobile-logo">
                </a>
            </div>
            <div class="nav-mobile-bars-wrap">
                <button class="nav-mobile-bars-btn">
                    <i class="fa-sharp fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
        <div class="nav-mobile-info-wrap">
            <a href="" class="nav-mobile-info-order-btn">
                <i class="fa-solid fa-bus"></i>
                objednávka
            </a>
            <p class="nav-mobile-info-phone-num">
                <i class="fa-solid fa-phone"></i>
                +420 725 675 021
            </p>
        </div>
        <ul class="nav-mobile-item-wrap">
            <li class="nav-mobile-item">
                <a href="/" class="nav-mobile-link">Úvod</a>
            </li>
            <li class="nav-mobile-item">
                <a href="/games" class="nav-mobile-link">Služby</a>
            </li>
            <li class="nav-mobile-item">
                <a href="/services" class="nav-mobile-link">Vozový park</a>
            </li>
            <li class="nav-mobile-item">
                <a href="/news" class="nav-mobile-link">Zájezdy</a>
            </li>
            <li class="nav-mobile-item">
                <a href="/info" class="nav-mobile-link">Kontakt</a>
            </li>
        </ul>
    </nav>
    <main>
        {{$slot}}
    </main>
    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-item">
                <img src="{{" imgs/footer/footer-logo-bus.png"}}" alt="Footer Logo" class="footer-logo">
                <p class="footer-info-text">
                    <img src="{{" imgs/footer/footer-phone.png"}}" alt="Footer Phone" class="footer-info-icon">
                    +420 722 604 746
                </p>
                <p class="footer-info-text">
                    <img src="{{" imgs/footer/footer-email.png"}}" alt="Footer Email" class="footer-info-icon">
                    dyboatrans@email.cz
                </p>
            </div>
            <div class="footer-item">
                <h3 class="footer-links-title">Stránky</h3>
                <a href="" class="footer-link">
                    <i class="fa-solid fa-angle-right"></i>
                    domů
                </a>
                <a href="" class="footer-link">
                    <i class="fa-solid fa-angle-right"></i>
                    služby
                </a>
                <a href="" class="footer-link">
                    <i class="fa-solid fa-angle-right"></i>
                    kontakt
                </a>
                <a href="" class="footer-link">
                    <i class="fa-solid fa-angle-right"></i>
                    vozový park
                </a>
                <a href="" class="footer-link">
                    <i class="fa-solid fa-angle-right"></i>
                    zájezdy
                </a>
            </div>
            <div class="footer-item">
                <h3 class="footer-opening-title">Otevírací doba</h3>
                <h4 class="footer-opening-subtitle">Na objednání</h4>
                <p class="footer-opening-days">
                    <img src="{{" imgs/footer/footer-calendar.png"}}" alt="Footer Calendar"
                        class="footer-opening-days-icon">
                    Pondělí - Neděle
                </p>
                <div class="footer-opening-times-wrap">
                    <div class="footer-opening-times-icon-wrap">
                        <img src="{{" imgs/footer/footer-clock.png"}}" alt="Footer Clock"
                            class="footer-opening-times-icon">
                    </div>
                    <div class="footer-opening-times-text-wrap">
                        <p class="footer-opening-times-text">PO: 17:00 - 22:00</p>
                        <p class="footer-opening-times-text">ÚT: 17:00 - 22:00</p>
                        <p class="footer-opening-times-text">ST: 17:00 - 22:00</p>
                        <p class="footer-opening-times-text">ČT: 17:00 - 22:00</p>
                        <p class="footer-opening-times-text">PÁ: 17:00 - 22:00</p>
                        <p class="footer-opening-times-text">SO: 9:00 - 22:00</p>
                        <p class="footer-opening-times-text">NE: 9:00 - 22:00</p>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{" imgs/footer/footer-wave.png"}}" alt="Footer Wave" class="footer-wave">
    </footer>
</body>

</html>