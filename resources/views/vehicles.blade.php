<x-layout>
    <header class="veh-header">
        <div class="veh-header-inner-wrap">
            <div class="veh-header-content">
                <h1 class="veh-header-title">VOZOVÝ <br> <span>PARK</span></h1>
                <div class="veh-header-row"></div>
                <p class="veh-header-text">
                    Naše autobusy splňují emisní limity EURO 6, čímž umožňujeme klientům levněji
                    cestovat do zemí, kde jsou tyto normy nutnou podmínkou pro vjezd do některých měst bez dodatkových
                    poplatků jako například Německo nebo Anglie.
                </p>
            </div>
            <div class="veh-header-img-wrap">
                <img src="{{" imgs/vehicles/veh-header-img.png"}}" alt="Vehicle Header Image" class="veh-header-img">
            </div>
        </div>
        <img src="{{" imgs/vehicles/veh-header-wave.svg"}}" alt="Vehicles Header Wave" class="veh-header-wave">

    </header>
    <section class="veh-cards-wrap">
        <div class="veh-cards-container">
            @foreach ($buses as $bus)

                @php
                    $imgPaths = explode(",", $bus->images);
                @endphp

                <div class="veh-card">
                    <div class="veh-card-img-wrap">
                        <img src="{{asset('storage/') . "/" . $imgPaths[1]}}" alt="" class="veh-card-img">
                    </div>
                    <div class="veh-card-text-wrap">
                        <h2 class="veh-card-title">{{$bus->name}}</h2>
                        <p class="veh-card-text">({{$bus->seatCount}})</p>
                        <a href="" class="veh-card-btn">
                            <img src="{{" imgs/vehicles/info-circle-icon.svg"}}" alt="Vehicles Card Btn Icon"
                                class="veh-card-btn-icon">
                            Chci zjistit více
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="veh-buses-wrap">
        <div class="veh-buses-inner-wrap">
            @foreach ($buses as $bus)

                @php
                    $busesLgimgPaths = explode(",", $bus->images);
                @endphp

                <div class="veh-buses-bus-item" id="bus{{$bus->id}}">
                    <div class="veh-buses-row"></div>
                    <div class="veh-buses-upper-wrap">
                        <div class="veh-buses-upper-text-wrap">
                            <div class="veh-buses-upper-text-inner-wrap">
                                <h2 class="veh-buses-upper-title">{{$bus->name}}</h2>
                                <div class="veh-buses-upper-row"></div>
                                <p class="veh-buses-upper-text">
                                    {{$bus->descLong}}
                                </p>
                            </div>
                        <div class="veh-buses-lower-text-wrap">
                            <h3 class="veh-buses-lower-title">Vybavení</h3>
                            <div class="veh-buses-lower-text-inner-wrap">
                                @if (count(explode("=", $bus->icons)) <= 8)
                                    @foreach (explode("=", $bus->icons) as $icon)
                                        <div class="veh-buses-lower-icons-single-row-item">
                                            <img src="{{explode(",", $icon)[0]}}" alt="Buses Icon Image">
                                            <p class="veh-buses-lower-icon-text">{{explode(",", $icon)[1]}}</p>
                                        </div>
                                    @endforeach
                                @else
                                    @php
                                        $allIcons = explode("=", $bus->icons);
                                        $firstEight = array_slice($allIcons, 0, 8);
                                        $lastEight = array_slice($allIcons, 9, count($allIcons) - 8);
    
                                    @endphp
                                    <div class="veh-buses-lower-text-two-columns-wrap">
                                        <div class="veh-buses-lower-icons-wrap">
                                            @foreach ($firstEight as $icon)
                                                <div class="veh-buses-lower-icons-item">
                                                    <img src="{{explode(",", $icon)[0]}}" alt="Buses Icon Image">
                                                    <p class="veh-buses-lower-icon-text">{{explode(",", $icon)[1]}}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="veh-buses-lower-icons-wrap">
                                            @foreach ($lastEight as $icon)
                                            <div class="veh-buses-lower-icons-item">
                                                <img src="{{explode(",", $icon)[0]}}" alt="Buses Icon Image">
                                                <p class="veh-buses-lower-icon-text">{{explode(",", $icon)[1]}}</p>
                                            </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="veh-buses-upper-img-wrap">
                            <div class="veh-buses-upper-img-container">
                                <img src="{{asset('storage/') . "/" . $busesLgimgPaths[0]}}" alt="Vehicles Bus Image"
                                    class="veh-buses-upper-img">
                            </div>
                            <div class="veh-buses-upper-img-container veh-buses-upper-img-sm-imgs-container">
                                <div class="veh-buses-upper-img-sm-imgs-item">
                                    <img src="{{asset('storage/') . "/" . $busesLgimgPaths[1]}}" alt="Vehicle Bus Small Image"
                                        class="veh-buses-lower-img">
                                </div>
                                <div class="veh-buses-upper-img-sm-imgs-item">
                                    <img src="{{asset('storage/') . "/" . $busesLgimgPaths[2]}}" alt="Vehicle Bus Small Image"
                                        class="veh-buses-lower-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
