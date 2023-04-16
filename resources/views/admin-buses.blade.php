<x-admin-layout>
    <section class="admin-buses-wrap">
        <div class="admin-buses-item">
            <h1 class="admin-buses-title">Vozový park</h1>
            <div class="admin-buses-cards-container">
                <button class="admin-buses-add-card">
                    <i class="fa-solid fa-plus"></i>
                    <h3 class="admin-buses-add-card-text">Přidat vozidlo</h3>
                </button>

                {{-- Cards --}}
                @if (count($buses) > 0)
                @foreach ($buses as $bus)

                @php
                $cardImgPath = explode(",", $bus->images)[1];
                @endphp

                <div class="admin-buses-card">
                    <div class="admin-buses-card-img-wrap">
                        <img src="{{asset('storage/'.$cardImgPath)}}" alt="Admin Buses Card Image"
                            class="admin-buses-card-img">
                    </div>
                    <div class="admin-buses-card-text-wrap">
                        <h3 class="admin-buses-card-title">{{$bus->name}}</h3>
                        <p class="admin-buses-card-text">{{$bus->seatCount}}</p>
                    </div>
                    <form action="/buses/{{$bus->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="admin-buses-card-btn admin-buses-card-delete-btn">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                    <button class="admin-buses-card-btn admin-buses-card-edit-btn" data-bus="{{implode(" |",
                        str_replace("\n", '' , $bus->toArray()))}}">
                        <i class=" fa-solid fa-paintbrush"></i>
                    </button>
                </div>
                @endforeach
                @endif
            </div>
        </div>

        {{-- =================================== Form Create =================================== --}}
        <div class="admin-buses-item admin-buses-item-create-form">
            <form action="/buses/store" method="POST" class="admin-buses-item-form" enctype="multipart/form-data">
                @csrf
                <div class="admin-buses-item-form-container">
                    {{-- Inner 1 --}}
                    <div class="admin-buses-item-form-inner-wrap">
                        <div class="admin-buses-item-form-item">
                            <label for="name" class="admin-buses-item-form-label">Název</label>
                            <input type="text" name="name" class="admin-buses-item-form-input">
                        </div>
                        <div class="admin-buses-item-form-item">
                            <label for="descShort" class="admin-buses-item-form-label">Krátký popisek</label>
                            <input type="text" name="descShort" class="admin-buses-item-form-input">
                        </div>
                        <div class="admin-buses-item-form-item">
                            <label for="seatCount" class="admin-buses-item-form-label">Počet sedadel</label>
                            <input type="text" name="seatCount" class="admin-buses-item-form-input">
                        </div>
                        <div class="admin-buses-item-form-item">
                            <label for="descLong" class="admin-buses-item-form-label">Popis</label>
                            <textarea name="descLong" class="admin-buses-item-form-textarea"></textarea>
                        </div>

                        <label class="admin-buses-item-form-label">Nahrané fotky</label>
                        <div class="admin-buses-item-form-preview-imgs-wrap">
                            <div class="admin-buses-item-form-preview-img-item">
                                <img src="" alt="Admin Buses Preview Image" class="admin-buses-item-form-preview-img">
                            </div>
                            <div class="admin-buses-item-form-preview-img-item">
                                <img src="" alt="Admin Buses Preview Image" class="admin-buses-item-form-preview-img">
                            </div>
                            <div class="admin-buses-item-form-preview-img-item">
                                <img src="" alt="Admin Buses Preview Image" class="admin-buses-item-form-preview-img">
                            </div>
                        </div>
                    </div>

                    {{-- Inner 2 --}}
                    <div class="admin-buses-item-form-inner-wrap">
                        <div class="admin-buses-item-form-icon-select-wrap">
                            <label class="admin-buses-item-form-label">Vlastnosti</label>
                            <div class="admin-buses-item-form-icon-select-card">
                                <div class="admin-buses-item-form-icon-select-header">
                                    <p class="admin-buses-item-form-icon-select-header-text">
                                        Ikona
                                    </p>
                                    <p class="admin-buses-item-form-icon-select-header-text">
                                        Popis
                                    </p>
                                </div>
                                <div class="admin-buses-item-form-icon-select-body">
                                    {{-- Item 1 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/bus-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">Dálkový autobus</p>
                                        </div>
                                    </div>
                                    {{-- Item 2 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/cafe-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">kávovar</p>
                                        </div>
                                    </div>
                                    {{-- Item 3 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/caravan-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">tažné zařízení</p>
                                        </div>
                                    </div>
                                    {{-- Item 4 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/chair-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">polohovatelné sedačky
                                            </p>
                                        </div>
                                    </div>
                                    {{-- Item 5 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/dvd-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">DVD</p>
                                        </div>
                                    </div>
                                    {{-- Item 6 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/fridge-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">lednice</p>
                                        </div>
                                    </div>
                                    {{-- Item 7 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/gps-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">GPS</p>
                                        </div>
                                    </div>
                                    {{-- Item 8 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/leaf-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">EURO 5</p>
                                        </div>
                                    </div>
                                    {{-- Item 9 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/microphone-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">mikrofon</p>
                                        </div>
                                    </div>
                                    {{-- Item 10 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/person-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">49 míst k sezení</p>
                                        </div>
                                    </div>
                                    {{-- Item 11 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/wifi-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">Wifi</p>
                                        </div>
                                    </div>
                                    {{-- Item 12 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/shield-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">moderní bezpečnost
                                            </p>
                                        </div>
                                    </div>
                                    {{-- Item 13 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/snowflake-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">klimatizace</p>
                                        </div>
                                    </div>
                                    {{-- Item 14 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/toilet-paper-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">toaleta</p>
                                        </div>
                                    </div>
                                    {{-- Item 15 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/tv-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">2x TV</p>
                                        </div>
                                    </div>
                                    {{-- Item 16 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-create-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/usb-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-create-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">USB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin-buses-item-form-img-upload-wrap">
                            <input type="file" name="images[]" multiple
                                class="admin-buses-item-form-input admin-buses-item-form-img-input">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                            <p class="admin-buses-item-form-img-upload-text">Nahrát fotky</p>
                        </div>
                    </div>
                </div>

                <div class="admin-buses-form-btn-wrap">
                    <button type="submit" class="admin-buses-form-btn">Uložit</button>
                </div>

                {{-- Ghost Input for Icons --}}
                <input type="text" class="admin-buses-icons-input" name="icons">
            </form>
        </div>

        {{-- =================================== Form Edit =================================== --}}
        <div class="admin-buses-item admin-buses-item-edit-form admin-buses-disable-item">
            <form action="" method="POST" class="admin-buses-item-form admin-buses-item-form-edit"
                enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="admin-buses-item-form-container">
                    {{-- Inner 1 --}}
                    <div class="admin-buses-item-form-inner-wrap">
                        <div class="admin-buses-item-form-item">
                            <label for="name" class="admin-buses-item-form-label">Název</label>
                            <input type="text" name="name" class="admin-buses-item-form-input"
                                id="admin-buses-item-name-input">
                        </div>
                        <div class="admin-buses-item-form-item">
                            <label for="descShort" class="admin-buses-item-form-label">Krátký popisek</label>
                            <input type="text" name="descShort" class="admin-buses-item-form-input"
                                id="admin-buses-item-descShort-input">
                        </div>
                        <div class="admin-buses-item-form-item">
                            <label for="seatCount" class="admin-buses-item-form-label">Počet sedadel</label>
                            <input type="text" name="seatCount" class="admin-buses-item-form-input"
                                id="admin-buses-item-seatCount-input">
                        </div>
                        <div class="admin-buses-item-form-item">
                            <label for="descLong" class="admin-buses-item-form-label">Popis</label>
                            <textarea name="descLong" class="admin-buses-item-form-textarea"
                                id="admin-buses-item-descLong-input"></textarea>
                        </div>

                        <label class="admin-buses-item-form-label">Nahrané fotky</label>
                        <div class="admin-buses-item-form-preview-imgs-wrap">
                            <div class="admin-buses-item-form-preview-img-item">
                                <img src="" alt="Admin Buses Preview Image"
                                    class="admin-buses-item-form-edit-preview-img">
                            </div>
                            <div class="admin-buses-item-form-preview-img-item">
                                <img src="" alt="Admin Buses Preview Image"
                                    class="admin-buses-item-form-edit-preview-img">
                            </div>
                            <div class="admin-buses-item-form-preview-img-item">
                                <img src="" alt="Admin Buses Preview Image"
                                    class="admin-buses-item-form-edit-preview-img">
                            </div>
                        </div>
                    </div>

                    {{-- Inner 2 --}}
                    <div class="admin-buses-item-form-inner-wrap">
                        <div class="admin-buses-item-form-icon-select-wrap">
                            <label class="admin-buses-item-form-label">Vlastnosti</label>
                            <div class="admin-buses-item-form-icon-select-card">
                                <div class="admin-buses-item-form-icon-select-header">
                                    <p class="admin-buses-item-form-icon-select-header-text">
                                        Ikona
                                    </p>
                                    <p class="admin-buses-item-form-icon-select-header-text">
                                        Popis
                                    </p>
                                </div>
                                <div class="admin-buses-item-form-icon-select-body">
                                    {{-- Item 1 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/bus-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">Dálkový autobus</p>
                                        </div>
                                    </div>
                                    {{-- Item 2 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/cafe-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">kávovar</p>
                                        </div>
                                    </div>
                                    {{-- Item 3 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/caravan-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">tažné zařízení</p>
                                        </div>
                                    </div>
                                    {{-- Item 4 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/chair-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">polohovatelné sedačky
                                            </p>
                                        </div>
                                    </div>
                                    {{-- Item 5 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/dvd-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">DVD</p>
                                        </div>
                                    </div>
                                    {{-- Item 6 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/fridge-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">lednice</p>
                                        </div>
                                    </div>
                                    {{-- Item 7 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/gps-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">GPS</p>
                                        </div>
                                    </div>
                                    {{-- Item 8 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/leaf-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">EURO 5</p>
                                        </div>
                                    </div>
                                    {{-- Item 9 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/microphone-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">mikrofon</p>
                                        </div>
                                    </div>
                                    {{-- Item 10 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/person-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">49 míst k sezení</p>
                                        </div>
                                    </div>
                                    {{-- Item 11 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/wifi-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">Wifi</p>
                                        </div>
                                    </div>
                                    {{-- Item 12 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/shield-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">moderní bezpečnost
                                            </p>
                                        </div>
                                    </div>
                                    {{-- Item 13 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/snowflake-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">klimatizace</p>
                                        </div>
                                    </div>
                                    {{-- Item 14 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/toilet-paper-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">toaleta</p>
                                        </div>
                                    </div>
                                    {{-- Item 15 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/tv-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">2x TV</p>
                                        </div>
                                    </div>
                                    {{-- Item 16 --}}
                                    <div
                                        class="admin-buses-item-form-icon-select-item admin-buses-item-form-icon-edit-select-item">
                                        <div class="admin-buses-item-form-icon-select-item-icon-wrap">
                                            <img src="{{ URL::to('/') }}/imgs/busIcons/usb-icon.svg"
                                                alt="Admin Buses Icon Select Image"
                                                class="admin-buses-item-form-icon-select-item-icon admin-buses-item-form-icon-select-item-edit-icon">
                                        </div>
                                        <div class="admin-buses-item-form-icon-select-item-text-wrap">
                                            <p class="admin-buses-item-form-icon-select-item-text">USB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin-buses-item-form-img-upload-wrap">
                            <input type="file" name="images[]" multiple
                                class="admin-buses-item-form-input admin-buses-item-form-img-input">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                            <p class="admin-buses-item-form-img-upload-text">Nahrát fotky</p>
                        </div>
                    </div>
                </div>

                <div class="admin-buses-form-btn-wrap">
                    <button type="submit" class="admin-buses-form-btn">Uložit</button>
                </div>

                {{-- Ghost Input for Icons --}}
                <input type="text" class="admin-buses-icons-input admin-buses-icons-edit-input" name="icons">
            </form>
        </div>
    </section>
    <script>
        // ========================= Add & Remove Icons =========================
        let iconsInput = document.querySelector(".admin-buses-icons-input");
        let iconsCardItems = document.querySelectorAll(".admin-buses-item-form-icon-create-select-item");
        let iconsCardIcons = document.querySelectorAll(".admin-buses-item-form-icon-select-item-create-icon");
        let iconsToUpload = [];

        iconsCardItems.forEach(item => {
            item.addEventListener("click", (e) => {
                let iconPath = item.children[0].children[0].src;
                let iconText = item.children[1].children[0].textContent;

                if (!item.classList.contains("admin-icon-item-active")) {
                    item.classList.add("admin-icon-item-active");
                    iconsToUpload = [...iconsToUpload, iconPath + "," + iconText];
                } else {
                    item.classList.remove("admin-icon-item-active");

                    let index = iconsToUpload.indexOf(iconPath + "," + iconText);
                    if (index >= 0) {
                        iconsToUpload.splice(index, 1);
                    }
                }

                iconsInput.value = iconsToUpload.join("=");
            })
        })

        // ========================= Enable and Disable Forms =========================
        const addBusBtn = document.querySelector(".admin-buses-add-card");
        const cardEditBtns = document.querySelectorAll(".admin-buses-card-edit-btn");
        const createForm = document.querySelector(".admin-buses-item-create-form");
        const editForm = document.querySelector(".admin-buses-item-edit-form");

        // Display create form
        addBusBtn.addEventListener("click", () => {
            createForm.classList.remove("admin-buses-disable-item");
            editForm.classList.add("admin-buses-disable-item");
        });

        // Display edit form & Insert card data into form
        cardEditBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                let iconsPaths = [];
                createForm.classList.add("admin-buses-disable-item");
                editForm.classList.remove("admin-buses-disable-item");

                const busArrayData = btn.dataset.bus.split("|");

                let iconsToUploadEdit = busArrayData[6].split("=");
                iconsToUploadEdit[busArrayData[6].split("=").length - 1] = busArrayData[6].split("=")[busArrayData[6].split("=").length - 1].trim();

                // Clear active class from all items
                document.querySelectorAll(".admin-icon-item-active").forEach(item => item.classList.remove("admin-icon-item-active"));

                // Change icon items
                iconsInput = document.querySelector(".admin-buses-icons-edit-input");
                iconsCardItems = document.querySelectorAll(".admin-buses-item-form-icon-edit-select-item");
                iconsCardIcons = document.querySelectorAll(".admin-buses-item-form-icon-select-item-edit-icon");

                iconsCardItems.forEach(item => {
                    item.onclick = function() {
                        let iconPath = item.children[0].children[0].src;
                        let iconText = item.children[1].children[0].textContent;

                        if (!item.classList.contains("admin-icon-item-active")) {
                            item.classList.add("admin-icon-item-active");
                            iconsToUploadEdit = [...iconsToUploadEdit, iconPath + "," + iconText.trim()];
                        } else {
                            item.classList.remove("admin-icon-item-active");

                            let index = iconsToUploadEdit.indexOf(iconPath + "," + iconText.trim());
                            if (index >= 0) {
                                iconsToUploadEdit.splice(index, 1);
                            }
                        }

                        iconsInput.value = iconsToUploadEdit.join("=");
                    }
                })

                const nameInput = document.getElementById("admin-buses-item-name-input");
                const descShortInput = document.getElementById("admin-buses-item-descShort-input");
                const seatCountInput = document.getElementById("admin-buses-item-seatCount-input");
                const descLongInput = document.getElementById("admin-buses-item-descLong-input");

                const previewImages = document.querySelectorAll(".admin-buses-item-form-edit-preview-img");
                const selectIconsItems = document.querySelectorAll(".admin-buses-item-form-icon-edit-select-item");
                const selectIcons = document.querySelectorAll(".admin-buses-item-form-icon-select-item-edit-icon");

                const form = document.querySelector(".admin-buses-item-form-edit");
                form.action = "/buses/edit/" + busArrayData[0];

                nameInput.value = busArrayData[1];
                descShortInput.value = busArrayData[2];
                seatCountInput.value = busArrayData[3];
                descLongInput.value = busArrayData[4];

                imgPathArray = busArrayData[5].split(",").filter(n => n);

                busArrayData[6].split("=").forEach(item => {
                    iconsPaths.push(item.split(",")[0]);
                })

                selectIcons.forEach((icon, i) => {
                    iconsPaths.forEach(path => {
                        if (icon.src === path) {
                            icon.parentNode.parentNode.classList.add("admin-icon-item-active")
                        }
                    })
                })

                previewImages.forEach((img, i) => {
                    img.src = "/storage/" + imgPathArray[i];
                    img.style.display = "block";
                })
            })
        })

        // ========================= Admin Img Preview =========================
        let imgUploadInput = document.querySelector(".admin-buses-item-form-img-input");;
        let formImgs = document.querySelectorAll(".admin-buses-item-form-preview-img");

        const setPreviewImgs = () => {
            if (imgUploadInput.files) {
                const filesAmount = imgUploadInput.files.length;

                for (let i = 0; i < imgUploadInput.files.length; i++) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        formImgs[i].src = e.target.result;
                        formImgs[i].style.display = "block";
                    }

                    reader.readAsDataURL(imgUploadInput.files[i]);
                }
            }
        }

        imgUploadInput.addEventListener("change", setPreviewImgs);
    </script>
</x-admin-layout>