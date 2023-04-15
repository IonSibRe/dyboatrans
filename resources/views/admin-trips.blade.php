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
                    <button class="admin-trips-card-btn admin-trips-card-edit-btn" data-trip={{implode("|",
                        $trip->toArray())}}>
                        <i class="fa-solid fa-paintbrush"></i>
                    </button>
                </div>
                @endforeach
                @endif
            </div>
        </div>
        {{-- =================================== Form Create =================================== --}}
        <div class="admin-trips-item admin-trips-item-create-form-wrap">
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
        {{-- =================================== Form Edit =================================== --}}
        <div class="admin-trips-item admin-trips-item-edit-form-wrap admin-trips-disable-item">
            <form action="" method="POST" enctype="multipart/form-data" class="admin-trips-form admin-trips-edit-form">
                @csrf
                @method("PUT")
                <div class="admin-trips-form-container">
                    <div class="admin-trips-form-inner-wrap">
                        <div class="admin-trips-form-item">
                            <label for="name" class="admin-trips-form-label">Edit</label>
                            <input type="text" name="name" class="admin-trips-form-input" id="admin-trips-name-input">
                        </div>

                        <div class="admin-trips-form-item">
                            <label for="descShort" class="admin-trips-form-label">Krátký popisek</label>
                            <input type="text" name="descShort" class="admin-trips-form-input"
                                id="admin-trips-descShort-input">
                        </div>

                        <div class="admin-trips-form-item">
                            <label for="price" class="admin-trips-form-label">Cena</label>
                            <input type="text" name="price" class="admin-trips-form-input" id="admin-trips-price-input">
                        </div>

                        <div class="admin-trips-form-item">
                            <label for="descLong" class="admin-trips-form-label">Popis</label>
                            <textarea name="descLong" class="admin-trips-form-textarea"
                                id="admin-trips-descLong-input"></textarea>
                        </div>

                        <div class="admin-trips-form-item">
                            <label class="admin-trips-form-label">Nahrané fotky</label>
                            <div class="admin-trips-form-item-img-container">
                                <div class="admin-trips-form-item-img-wrap">
                                    <img src="" alt="Admin Preview Image" class="admin-trips-form-edit-item-img">
                                </div>
                                <div class="admin-trips-form-item-img-wrap">
                                    <img src="" alt="Admin Preview Image" class="admin-trips-form-edit-item-img">
                                </div>
                                <div class="admin-trips-form-item-img-wrap">
                                    <img src="" alt="Admin Preview Image" class="admin-trips-form-edit-item-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="admin-trips-form-inner-wrap">
                        <div class="admin-trips-form-item">
                            <label for="date" class="admin-trips-form-label">Termín</label>
                            <input type="text" name="date" class="admin-trips-form-input" id="admin-trips-date-input">
                        </div>

                        <div class="admin-trips-form-item">
                            <label for="departure" class="admin-trips-form-label">Odjezd</label>
                            <input type="text" name="departure" class="admin-trips-form-input"
                                id="admin-trips-departure-input">
                        </div>

                        <div class="admin-trips-form-item">
                            <label for="priceIncludes" class="admin-trips-form-label">Cena zahrnuje</label>
                            <input type="text" name="priceIncludes" class="admin-trips-form-input"
                                id="admin-trips-priceIncludes-input">
                        </div>

                        <div class="admin-trips-form-item">
                            <label for="priceNotIncludes" class="admin-trips-form-label">Cena nezahrnuje</label>
                            <input type="text" name="priceNotIncludes" class="admin-trips-form-input"
                                id="admin-trips-priceNotIncludes-input">
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

        const setPreviewImgs = () => {
            console.log("change");

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

        // ========================= Enable and Disable Forms =========================
        const addTripBtn = document.querySelector(".admin-trips-add-card");
        const cardEditBtns = document.querySelectorAll(".admin-trips-card-edit-btn");
        const createForm = document.querySelector(".admin-trips-item-create-form-wrap");
        const editForm = document.querySelector(".admin-trips-item-edit-form-wrap");

        addTripBtn.addEventListener("click", () => {
            createForm.classList.remove("admin-trips-disable-item");
            editForm.classList.add("admin-trips-disable-item");
        });

        cardEditBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                createForm.classList.add("admin-trips-disable-item");
                editForm.classList.remove("admin-trips-disable-item");

                const tripArrayData = btn.dataset.trip.split("|");

                const nameInput = document.getElementById("admin-trips-name-input");
                const descShortInput = document.getElementById("admin-trips-descShort-input");
                const priceInput = document.getElementById("admin-trips-price-input");
                const descLongInput = document.getElementById("admin-trips-descLong-input");
                const dateInput = document.getElementById("admin-trips-date-input");
                const departureInput = document.getElementById("admin-trips-departure-input");
                const priceIncludesInput = document.getElementById("admin-trips-priceIncludes-input");
                const priceNotIncludesInput = document.getElementById("admin-trips-priceNotIncludes-input");

                const previewImages = document.querySelectorAll(".admin-trips-form-edit-item-img");

                const form = document.querySelector(".admin-trips-edit-form");
                form.action = "/trips/edit/" + tripArrayData[0];

                nameInput.value = tripArrayData[1];
                descShortInput.value = tripArrayData[2];
                priceInput.value = tripArrayData[3];
                descLongInput.value = tripArrayData[4];
                dateInput.value = tripArrayData[5];
                departureInput.value = tripArrayData[6];
                priceIncludesInput.value = tripArrayData[7];
                priceNotIncludesInput.value = tripArrayData[8];
                
                imgPathArray = tripArrayData[9].split(",").filter(n => n);

                previewImages.forEach((img, i) => {
                    img.src = "/storage/" + imgPathArray[i];
                })  
            })
        })
    </script>
</x-admin-layout>