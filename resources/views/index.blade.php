<x-layout>
    @php
    @endphp
    {{-- ================== Header ================== --}}
    <header class="home-header">
        {{-- Header Showcase --}}
        <div class="home-header-showcase-wrap">
            <div class="home-header-showcase">
                <div class="home-header-showcase-slide current">
                    <div class="home-header-showcase-slide-content">
                        <h1 class="home-header-showcase-slide-title">
                            Je libo luxus
                            <span> za rozumné peníze?</span>
                        </h1>
                        <a href="/services" class="home-header-showcase-slide-btn">
                            <i class="fa-sharp fa-solid fa-circle-info"></i>
                            chci zjistit více
                        </a>
                    </div>
                </div>
                <div class="home-header-showcase-slide">
                    <div class="home-header-showcase-slide-content">
                        <h1 class="home-header-showcase-slide-title">
                            Sympatičtí a <span>ochotní řidiči</span> jsou samozřejmostí
                        </h1>
                        <a href="/vehicles" class="home-header-showcase-slide-btn">
                            <i class="fa-sharp fa-solid fa-circle-info"></i>
                            chci zjistit více
                        </a>
                    </div>
                </div>
                <div class="home-header-showcase-slide">
                    <div class="home-header-showcase-slide-content">
                        <h1 class="home-header-showcase-slide-title">
                            <span>20 Let</span>
                            zkušeností
                            <span>v oboru</span>
                        </h1>
                        <a href="/services" class="home-header-showcase-slide-btn">
                            <i class="fa-sharp fa-solid fa-circle-info"></i>
                            chci zjistit více
                        </a>
                    </div>
                </div>
                <div class="home-header-showcase-slide">
                    <div class="home-header-showcase-slide-content">
                        <h1 class="home-header-showcase-slide-title">
                            Chcete si
                            vychutnat třeba
                            <span>rakouské vánoční trhy?</span>
                        </h1>
                        <a href="/trips" class="home-header-showcase-slide-btn">
                            <i class="fa-sharp fa-solid fa-circle-info"></i>
                            chci zjistit více
                        </a>
                    </div>
                </div>
            </div>
            <div class="home-header-showcase-btns">
                <button id="home-header-showcase-btns-prev">
                    <i class="fa-solid fa-caret-left"></i>
                </button>
                <div class="home-header-showcase-dot home-header-showcase-dot-current"></div>
                <div class="home-header-showcase-dot"></div>
                <div class="home-header-showcase-dot"></div>
                <div class="home-header-showcase-dot"></div>
                <button id="home-header-showcase-btns-next">
                    <i class="fa-solid fa-caret-right"></i>
                </button>
            </div>
        </div>
        <div class="home-header-info">
            <div class="home-header-info-main-wrap">
                <div class="home-header-info-title-wrap">
                    <h2 class="home-header-info-title">
                        <span>Dyboatrans</span>
                        to je
                        <span>luxusní, pohodlná a bezpečná</span><br>
                        doprava osob po celé Evropě našimi autobusy.
                    </h2>
                </div>
                <div class="home-header-info-desc-wrap">
                    <h3 class="home-header-info-desc-title">
                        Vnitrostátní i mezinárodní autobusová doprava
                    </h3>
                    <p class="home-header-info-desc-text">
                        Máme mnoholeté zkušenosti s nepravidelnou autobusovou dopravou. Vzhledem k našemu luxusnímu
                        vozovému parku (obsaditelnost 3-53 míst), nabízíme svým klientům pestrou nabídku služeb
                        přepravy osob a to jak v tuzemsku, tak i do zahraničí.
                    </p>
                    <p class="home-header-info-desc-text">
                        Zajišťujeme dopravní služby pro cestovní kanceláře, školy, firmy i soukromé osoby. Moderní
                        vozový park a bohaté vybavení autobusů Vám zpříjemní tuzemské i mezistátní cestování.
                    </p>
                    <p class="home-header-info-desc-text">
                        Naše autobusy splňují emisní limity EURO 6, čímž umožňujeme klientům levněji cestovat do zemí,
                        kde jsou tyto normy nutnou podmínkou pro vjezd do některých měst bez dodatkových poplatků jako
                        například Německo, Rakousko, Polsko nebo Slovensko.
                    </p>
                </div>
            </div>
            <div class="home-header-info-side-wrap">
                <h2 class="home-header-info-side-wrap-title">
                    Proč byste si měli <span>zvolit zrovna nás?</span>
                </h2>
                <div class="home-header-info-side-wrap-item">
                    <i class="fa-solid fa-handshake home-header-info-side-wrap-item-icon"></i>
                    <p class="home-header-info-side-wrap-item-text">Profesionální přístup</p>
                </div>
                <div class="home-header-info-side-wrap-item">
                    <i class="fa-solid fa-city home-header-info-side-wrap-item-icon"></i>
                    <p class="home-header-info-side-wrap-item-text">Znalost všech evropských měst</p>
                </div>
                <div class="home-header-info-side-wrap-item">
                    <i class="fa-solid fa-briefcase home-header-info-side-wrap-item-icon"></i>
                    <p class="home-header-info-side-wrap-item-text">20 let zkušeností v oboru</p>
                </div>
                <div class="home-header-info-side-wrap-item">
                    <i class="fa-solid fa-globe home-header-info-side-wrap-item-icon"></i>
                    <p class="home-header-info-side-wrap-item-text">Anglicky mluvící řidiči</p>
                </div>
            </div>
        </div>
    </header>
    {{-- ================== Vehicle Showcase ================== --}}
    <section>
        <div class="home-vehicle-showcase">
            <h1 class="home-vehicle-showcase-title">Vozový park</h1>
            <div class="home-vehicle-showcase-wrap">
                <div class="home-vehicle-showcase-mobile-btns">
                    <button id="home-vehicle-showcase-mobile-btns-prev" type="button">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <i class="fa-solid fa-bus home-vehicle-showcase-mobile-btns-middle-icon"></i>
                    <button id="home-vehicle-showcase-mobile-btns-next" type="button">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
                <div class="home-vehicle-showcase-inner">
                    @foreach ($buses as $bus)

                    @php
                        $imgPaths = explode(",", $bus->images);
                        $iconsCount = 0;
                    @endphp

                    <div class="home-vehicle-showcase-slide">
                        <div class="home-vehicle-showcase-slide-content">
                            <div class="home-vehicle-showcase-slide-content-img-wrap">
                                <img src="{{asset('storage/') . "/" . $imgPaths[0]}}" alt="Vehicle Showcase Img"
                                    class="home-vehicle-showcase-slide-content-img">
                            </div>
                            <div class="home-vehicle-showcase-slide-content-text-wrap">
                                <div class="home-vehicle-showcase-slide-content-inner-text-wrap">
                                    <h2 class="home-vehicle-showcase-slide-content-title">{{$bus->name}}</h2>
                                    <div class="home-vehicle-showcase-slide-icons-wrap">
                                        <div class="home-vehicle-showcase-slide-icons-inner-wrap">
                                            @foreach (explode("=", $bus->icons) as $icon)
                                                @if (++$iconsCount < 6)
                                                    <img src="{{explode(",", $icon)[0]}}" alt="Vehicle Slide Icon"
                                                        class="home-vehicle-showcase-slide-icon">
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <p class="home-vehicle-showcase-slide-content-text">
                                        {{substr($bus->descShort, 0, 150)}}
                                        @if (strlen($bus->descShort) > 150)
                                            ...
                                        @endif
                                    </p>
                                    <div class="home-vehicle-showcase-slide-content-sm-imgs-wrap">
                                        <img src="{{asset('storage/') . "/" . $imgPaths[1]}}"
                                            alt="Vehicle Slide SM Image"
                                            class="home-vehicle-showcase-slide-content-sm-img">
                                        <img src="{{asset('storage/') . "/" . $imgPaths[2]}}"
                                            alt="Vehicle Slide SM Image"
                                            class="home-vehicle-showcase-slide-content-sm-img">
                                    </div>
                                    <a href="/vehicles#bus{{$bus->id}}" class="home-vehicle-showcase-slide-content-btn">
                                        <i class="fa-solid fa-circle-info"></i>
                                        více informací
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="home-vehicle-showcase-btns">
                    <button id="home-vehicle-showcase-btns-prev" type="button">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button id="home-vehicle-showcase-btns-next" type="button">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- ================== Trips ================== --}}
    <section class="home-trips">
        <div class="home-trips-inner">
            <div class="home-trips-text-wrap">
                <div class="home-trips-text-inner-wrap">
                    <h1 class="home-trips-title">Nabídka zájezdů</h1>
                    <p class="home-trips-text">Aktuální nabídku zájezdů najdete také na našich sociálních sítích.</p>
                </div>
                <div class="home-trips-text-inner-wrap">
                    <a href="/trips" class="home-trips-btn">
                        <i class="fa-solid fa-city"></i>
                        Všechny zájezdy
                    </a>
                </div>
            </div>
            <div class="home-trips-cards-wrap">
                @foreach ($trips as $trip)

                    @php
                        $tripCardImgPaths = explode(",", $trip->images);
                    @endphp

                    <div class="home-trips-card">
                        <div class="home-trips-card-img-wrap">
                            <a href="/trips/{{$trip->id}}">
                                <img src="{{asset('storage/') . "/" . $tripCardImgPaths[1]}}" alt="Trips Img" class="home-trips-card-img">
                            </a>
                        </div>
                        <div class="home-trips-card-text-wrap">
                            <h3 class="home-trips-card-title">{{$trip->name}}</h3>
                            <h4 class="home-trips-card-date">{{$trip->date}}</h4>
                            <div class="home-trips-card-row"></div>
                            <p class="home-trips-card-text">{{$trip->descShort}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
