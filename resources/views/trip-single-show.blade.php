<x-layout title="Zájezdy - {{$trip->name}}">
    @php
        $SpImgsPaths = explode(",", $trip->images);
    @endphp

    <header class="trip-sp-header">
        <img src="{{asset('storage/') . "/" . $SpImgsPaths[0]}}" alt="Trip SP Header Image" class="trip-sp-header-img">
        <div class="trip-sp-header-content">
            <h2 class="trip-sp-header-subtitle">Zájezdy</h2>
            <div class="trip-sp-header-row"></div>
            <h1 class="trip-sp-header-title">{{$trip->name}}</h1>
            <h1 class="trip-sp-header-date">{{$trip->date}}</h1>
        </div>
    </header>
    <section class="trip-sp-info-wrap">
        <div class="trip-sp-info-inner-wrap">
            <div class="trip-sp-info-text-wrap">
                <h1 class="trip-sp-info-title">{{$trip->name}}</h1>
                
                <h2 class="trip-sp-info-date">
                    <span class="trip-sp-info-text-bold">Termín: </span>
                    {{$trip->date}}
                </h2>
                <h2 class="trip-sp-info-price trip-sp-text-mb">
                    <span class="trip-sp-info-text-bold">Cena: </span>
                    {{$trip->price}}
                </h2>

                <p class="trip-sp-info-text">
                    <span class="trip-sp-info-text-bold">Cena zahrnuje: </span>
                    {{$trip->priceIncludes}}
                </p>

                <p class="trip-sp-info-text trip-sp-text-mb">
                    <span class="trip-sp-info-text-bold">Cena nezahrnuje: </span>
                    {{$trip->priceNotIncludes}}
                </p>

                <p class="trip-sp-info-text trip-sp-text-mb">
                    <span class="trip-sp-info-text-bold">Odjezd: </span>
                    {{$trip->departure}}
                </p>

                <p class="trip-sp-info-text trip-sp-text-mb">
                    {{$trip->descShort}}
                </p>

                <p class="trip-sp-info-text">
                    {{$trip->descLong}}
                </p>


            </div>
            <div class="trip-sp-info-img-wrap">
                <img src="{{asset('storage/') . "/" . $SpImgsPaths[1]}}" alt="Trip SP Info Image" class="trip-sp-info-img">
                <img src="{{asset('storage/') . "/" . $SpImgsPaths[2]}}" alt="Trip SP Info Image" class="trip-sp-info-img">
            </div>
        </div>
    </section>
</x-layout>