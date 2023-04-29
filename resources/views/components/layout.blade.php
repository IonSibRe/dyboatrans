<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
    <script src="//unpkg.com/alpinejs" defer></script>
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <link rel="icon" type="image/png" href="{{ asset('favicon-16x16.png') }}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ asset('favicon-32x32.png') }}" sizes="32x32" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}" />
    <title>Dyboatrans - S námi po celé Evropě</title>
		<meta name="description" content="Dyboatrans to je luxusní, pohodlná a bezpečná doprava osob po celé Evropě našimi autobusy.">
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "BreadcrumbList",
	  "itemListElement": [
      {
		"@type": "ListItem",
		"position": 1,
		"name": "Služby",
		"item": "https://www.dyboatrans.cz/services"
	  },
      {
		"@type": "ListItem",
		"position": 2,
		"name": "Vozový park",
		"item": "https://www.dyboatrans.cz/vehicles"
	  },
	  {
		"@type": "ListItem",
		"position": 3,
		"name": "Zájezdy",
		"item": "https://www.dyboatrans.cz/trips"
	  },
	  {
		"@type": "ListItem",
		"position": 4,
		"name": "Kontakt",
		"item": "https://www.dyboatrans.cz/contact"
	  }]
	}
    </script>
</head>

<body>
    {{-- Nav --}}
    <nav class="nav">
        <div class="nav-inner">
            <div class="nav-logo-wrap">
                <a href="/">
                    <img src="{{ URL::to('/') }}/imgs/nav/nav-logo.svg" alt="Nav Logo" class="nav-logo">
                </a>
            </div>
            <div class="nav-links-wrap">
                <a href="/" class="nav-link nav-link-active">úvod</a>
                <a href="/services" class="nav-link">služby</a>
                <a href="/vehicles" class="nav-link">vozový park</a>
                <a href="/trips" class="nav-link">zájezdy</a>
                <a href="/contact" class="nav-link">kontakt</a>
            </div>
            <div class="nav-info-wrap">
                <a href="/contact" class="nav-info-order-btn">
                    <i class="fa-solid fa-bus"></i>
                    objednávka
                </a>
                <div class="nav-info-phone-num-wrap">
                    <div class="nav-info-phone-num-icon-wrap">
                        <img src="{{ URL::to('/') }}/imgs/nav/phone-icon.svg" alt="Nav Phone Icon" class="nav-info-phone-num-icon">
                    </div>
                    <div class="nav-info-phone-num-text-wrap">
                        <p class="nav-info-phone-num-text">objednávky</p>
                        <a href="tel:+420722644746" class="nav-info-phone-num-text">+420 722 644 746</a>
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
            <a href="tel:+420722644746" class="nav-mobile-info-phone-num">
                <i class="fa-solid fa-phone"></i>
                +420 722 644 746
            </a>
        </div>
        <ul class="nav-mobile-item-wrap">
            <li class="nav-mobile-item">
                <a href="/" class="nav-mobile-link nav-mobile-link-active">Úvod</a>
            </li>
            <li class="nav-mobile-item">
                <a href="/services" class="nav-mobile-link">Služby</a>
            </li>
            <li class="nav-mobile-item">
                <a href="/vehicles" class="nav-mobile-link">Vozový park</a>
            </li>
            <li class="nav-mobile-item">
                <a href="/trips" class="nav-mobile-link">Zájezdy</a>
            </li>
            <li class="nav-mobile-item">
                <a href="/contact" class="nav-mobile-link">Kontakt</a>
            </li>
        </ul>
    </nav>
    <main>
        {{$slot}}
    </main>
    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-item">
                <img src="{{ URL::to('/') }}/imgs/footer/footer-logo-bus.png" alt="Footer Logo" class="footer-logo">
                <a href="tel:420722604746" class="footer-info-text">
                    <img src="{{ URL::to('/') }}/imgs/footer/footer-phone.png" alt="Footer Phone" class="footer-info-icon">
                    +420 722 604 746
                </a>
                <a href="mailto:dyboatrans@email.cz" class="footer-info-text">
                    <img src="{{ URL::to('/') }}/imgs/footer/footer-email.png" alt="Footer Email" class="footer-info-icon">
                    dyboatrans@email.cz
                </a>
            </div>
            <div class="footer-item">
                <h3 class="footer-links-title">Stránky</h3>
                <a href="/" class="footer-link">
                    <i class="fa-solid fa-angle-right"></i>
                    domů
                </a>
                <a href="/services" class="footer-link">
                    <i class="fa-solid fa-angle-right"></i>
                    služby
                </a>
                <a href="/contact" class="footer-link">
                    <i class="fa-solid fa-angle-right"></i>
                    kontakt
                </a>
                <a href="/vehicles" class="footer-link">
                    <i class="fa-solid fa-angle-right"></i>
                    vozový park
                </a>
                <a href="/trips" class="footer-link">
                    <i class="fa-solid fa-angle-right"></i>
                    zájezdy
                </a>
            </div>
            <div class="footer-item">
                <h3 class="footer-opening-title">Otevírací doba</h3>
                <p class="footer-opening-days">
                    <img src="{{ URL::to('/') }}/imgs/footer/footer-calendar.png" alt="Footer Calendar"
                        class="footer-opening-days-icon">
                    Pondělí - Neděle
                </p>
                <div class="footer-opening-times-wrap">
                    <div class="footer-opening-times-icon-wrap">
                        <img src="{{ URL::to('/') }}/imgs/footer/footer-clock.png" alt="Footer Clock"
                            class="footer-opening-times-icon">
                    </div>
                    <div class="footer-opening-times-text-wrap">
                        <p class="footer-opening-times-text">PO: 00:00 - 24:00</p>
                        <p class="footer-opening-times-text">ÚT: 00:00 - 24:00</p>
                        <p class="footer-opening-times-text">ST: 00:00 - 24:00</p>
                        <p class="footer-opening-times-text">ČT: 00:00 - 24:00</p>
                        <p class="footer-opening-times-text">PÁ: 00:00 - 24:00</p>
                        <p class="footer-opening-times-text">SO: 00:00 - 24:00</p>
                        <p class="footer-opening-times-text">NE: 00:00 - 24:00</p>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ URL::to('/') }}/imgs/footer/footer-wave.png" alt="Footer Wave" class="footer-wave">
    </footer>
</body>

</html>
