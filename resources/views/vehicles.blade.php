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
                                    {{$bus->descLong}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sed voluptas fugit est. Officiis corporis quas nam maiores vitae ratione hic voluptates quisquam culpa, facere, exercitationem deleniti dolorum maxime rerum repellendus officia laudantium quasi deserunt expedita beatae aut ullam earum placeat. Corrupti aliquam ullam inventore officiis quasi reprehenderit voluptates blanditiis?
                                </p>
                            </div>
                        </div>
                        <div class="veh-buses-upper-img-wrap">
                            <img src="{{asset('storage/') . "/" . $busesLgimgPaths[0]}}" alt="Vehicles Bus Image"
                                class="veh-buses-upper-img">
                        </div>
                    </div>
                    <div class="veh-buses-lower-wrap">
                        <div class="veh-buses-lower-text-wrap">
                            <h3 class="veh-buses-lower-title">Vybavení</h3>
                            <div class="veh-buses-lower-text-inner-wrap">
                                @foreach (explode("=", $bus->icons) as $icon)
                                    <div class="veh-buses-lower-icons-wrap">
                                        <img src="{{explode(",", $icon)[0]}}" alt="Buses Icon Image">
                                        <p class="veh-buses-lower-icon-text">{{explode(",", $icon)[1]}}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="veh-buses-lower-imgs-wrap">
                            <div class="veh-buses-lower-imgs-inner-wrap">
                                <div>
                                    <img src="{{asset('storage/') . "/" . $busesLgimgPaths[1]}}" alt="Vehicle Bus Small Image"
                                        class="veh-buses-lower-img">
                                </div>
                                <div>
                                    <img src="{{asset('storage/') . "/" . $busesLgimgPaths[2]}}" alt="Vehicle Bus Small Image"
                                        class="veh-buses-lower-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="veh-buses-layout-img-wrap">
                        <img src="{{" imgs/vehicles/veh-buses-layout-img.png"}}" alt="Vehicle Bus Layout Image"
                            class="veh-buses-layout-img">
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>