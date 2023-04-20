<x-layout>
    <header class="trips-header">
        <div class="trips-header-inner">
            <div class="trips-header-content-wrap">
                <div class="trips-header-content-inner-wrap">
                    <h2 class="trips-header-subtitle">Pojeďte s námi na</h2>
                    <h1 class="trips-header-title">Zájezdy</h1>
                    <div class="trips-header-row"></div>
                    <p class="trips-header-desc-bold">Vydejte se s námí na krátkodobé i dlouhodobé zájezdy za sportem,
                        kulturou a poznáním po ČR nebo Evropě.</p>
                    <div class="header-sm-row"></div>
                    <p class="trips-header-desc">
                        Nabízíme bezpečnou a pohodlnou dopravu s naším moderním vozovým parkem, zkušenými řidiči a
                        informativními průvodci.
                    </p>
                    <p class="trips-header-desc">
                        Zajišťujeme dodávky vozidel pro zájezdy soukromých skupin, stejně jako pro
                        programy zájezdů cestovních kanceláří na tuzemské i zahraniční cesty.
                    </p>
                </div>
            </div>
            <div class="trips-header-img-wrap">
                <div class="trips-header-img-inner-wrap">
                    <div>
                        <img src="{{" imgs/trips/lamp.png"}}" alt="Trips Header Image" class="trips-header-img">
                    </div>
                    <div>
                        <img src="{{" imgs/trips/rome.png"}}" alt="Trips Header Image" class="trips-header-img">
                    </div>
                </div>
                <div class="trips-header-img-inner-wrap">
                    <div>
                        <img src="{{" imgs/trips/london.png"}}" alt="Trips Header Image" class="trips-header-img">
                    </div>
                    <div>
                        <img src="{{" imgs/trips/berlin.png"}}" alt="Trips Header Image" class="trips-header-img">
                    </div>
                </div>
            </div>
        </div>
        <img src="{{" imgs/trips/trips-header-wave.svg"}}" alt="Trips Header Image" class="trips-header-wave">
    </header>
    <section class="trips-cards-wrap">
        <div class="trips-cards-inner-wrap">
            @foreach ($trips as $trip)

                @php
                    $tripImgPath = explode(",", $trip->images);
                @endphp

                <div class="trips-card">
                    <div class="trips-card-img-wrap">
                        <a href="/trips/{{$trip->id}}">
                            <img src="{{asset('storage/') . "/" . $tripImgPath[1]}}" alt="Trips Card Image" class="trips-card-img">
                        </a>
                    </div>
                    <div class="trips-card-text-wrap">
                        <h3 class="trips-card-title">{{$trip->name}}</h3>
                        <h4 class="trips-card-date">{{$trip->date}}</h4>
                        <div class="trips-card-row"></div>
                        <p class="trips-card-text">{{$trip->descShort}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>