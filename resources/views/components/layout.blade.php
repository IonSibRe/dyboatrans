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
                <a href="" class="nav-link nav-link-active">úvod</a>
                <a href="" class="nav-link">služby</a>
                <a href="" class="nav-link">vozový park</a>
                <a href="" class="nav-link">zájezdy</a>
                <a href="" class="nav-link">kontakt</a>
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
</body>

</html>