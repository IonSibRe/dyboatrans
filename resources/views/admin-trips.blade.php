<x-admin-layout>
    <section class="admin-trips-wrap">
        <div class="admin-trips-item">
            <h1 class="admin-trips-title">Zájezdy</h1>
            <div class="admin-trips-cards-wrap">
                {{-- Add Card --}}
                <button class="admin-trips-add-card">
                    <i class="fa-solid fa-plus"></i>
                    <h3 class="admin-trips-add-card-text">Přidat zájezd</h3>
                </button>
                {{-- Cards --}}
                @if (count($trips) > 0)
                @foreach ($trips as $trip)

                @php
                $cardImgPath = explode(",", $trip->images)[1];
                @endphp

                <div class="admin-trips-card">
                    <div class="admin-trips-card-img-wrap">
                        <img src="{{asset('storage/'.$cardImgPath)}}" alt="Admin Trips Card Image"
                            class="admin-trips-card-img">
                    </div>
                    <div class="admin-trips-card-text-wrap">
                        <h2 class="admin-trips-card-title">{{$trip->name}}</h2>
                        <h3 class="admin-trips-card-date">{{$trip->date}}</h3>
                        <div class="admin-trips-card-row"></div>
                        <p class="admin-trips-card-text">
                            {{$trip->descShort}}
                        </p>
                    </div>
                    <form action="/trips/{{$trip->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="admin-trips-card-btn admin-trips-card-delete-btn">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                    <button class="admin-trips-card-btn admin-trips-card-edit-btn">
                        <i class="fa-solid fa-paintbrush"></i>
                    </button>
                </div>
                @endforeach
                @endif
            </div>
        </div>
        {{-- Form --}}
        <div class="admin-trips-item">
            <form action="/trips/store" method="POST" enctype="multipart/form-data" class="admin-trips-form">
                @csrf
                <div class="admin-trips-form-container">
                    <div class="admin-trips-form-inner-wrap">
                        <div class="admin-trips-form-item">
                            <label for="name" class="admin-trips-form-label">Název</label>
                            <input type="text" name="name" class="admin-trips-form-input">
                        </div>

                        <div class="admin-trips-form-item">
                            <label for="descShort" class="admin-trips-form-label">Krátký popisek</label>
                            <input type="text" name="descShort" class="admin-trips-form-input">
                        </div>

                        <div class="admin-trips-form-item">
                            <label for="price" class="admin-trips-form-label">Cena</label>
                            <input type="text" name="price" class="admin-trips-form-input">
                        </div>

                        <div class="admin-trips-form-item">
                            <label for="descLong" class="admin-trips-form-label">Popis</label>
                            <textarea name="descLong" class="admin-trips-form-textarea"></textarea>
                        </div>

                        <div class="admin-trips-form-item">
                            <label class="admin-trips-form-label">Nahrané fotky</label>
                            <div class="admin-trips-form-item-img-container">
                                <div class="admin-trips-form-item-img-wrap">
                                    <img src="" alt="Admin Preview Image" class="admin-trips-form-item-img">
                                </div>
                                <div class="admin-trips-form-item-img-wrap">
                                    <img src="" alt="Admin Preview Image" class="admin-trips-form-item-img">
                                </div>
                                <div class="admin-trips-form-item-img-wrap">
                                    <img src="" alt="Admin Preview Image" class="admin-trips-form-item-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="admin-trips-form-inner-wrap">
                        <div class="admin-trips-form-item">
                            <label for="date" class="admin-trips-form-label">Termín</label>
                            <input type="text" name="date" class="admin-trips-form-input">
                        </div>

                        <div class="admin-trips-form-item">
                            <label for="departure" class="admin-trips-form-label">Odjezd</label>
                            <input type="text" name="departure" class="admin-trips-form-input">
                        </div>

                        <div class="admin-trips-form-item">
                            <label for="priceIncludes" class="admin-trips-form-label">Cena zahrnuje</label>
                            <input type="text" name="priceIncludes" class="admin-trips-form-input">
                        </div>

                        <div class="admin-trips-form-item">
                            <label for="priceNotIncludes" class="admin-trips-form-label">Cena nezahrnuje</label>
                            <input type="text" name="priceNotIncludes" class="admin-trips-form-input">
                        </div>

                        <div class="admin-trips-form-item admin-trips-form-img-upload-item">
                            <input type="file" name="images[]" multiple
                                class="admin-trips-form-input admin-trips-form-img-input">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                            <p class="admin-trips-form-img-input-text">Nahrát fotky</p>
                        </div>
                    </div>
                </div>
                <div class="admin-trips-form-btn-wrap">
                    <button type="submit" class="admin-trips-form-btn">Uložit</button>
                </div>
            </form>
        </div>
    </section>
    <script>
        // ========================= Admin Img Preview =========================
        const imgUploadInput = document.querySelector(".admin-trips-form-img-input");
        const formImgs = document.querySelectorAll(".admin-trips-form-item-img");

        imgUploadInput.addEventListener("change", () => {
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
        });
    </script>
</x-admin-layout>