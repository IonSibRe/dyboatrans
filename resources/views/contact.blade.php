<x-layout>
    {{-- Header --}}
    <header class="con-header">
        <div class="con-header-img-wrap">
            <img src="{{" imgs/contact/con-header-img.png"}}" alt="Contact Header Image" class="con-header-img">
        </div>
        <div class="con-header-text-wrap">
            <div class="con-header-text-inner-wrap">
                <h1 class="con-header-title">Kontakt</h1>
                <div class="con-header-row"></div>
                <p class="con-header-text">
                    Pokud máte jakýkoliv dotaz ohledně našich služeb, vozového parku, či zájezdů
                    nebojte se nás kontaktovat.
                </p>
                <div class="con-header-sm-row"></div>
            </div>
        </div>
    </header>
    {{-- Info --}}
    <section class="con-info-wrap">
        {{-- Address --}}
        <div class="con-info-address-wrap">
            <div class="con-info-address-text-wrap">
                <h2 class="con-info-address-title">
                    <i class="fa-solid fa-location-dot"></i> Adresa
                </h2>
                <p class="con-info-address-text">
                    <span class="con-info-address-text-bold">
                        Dyboatrans s.r.o
                    </span>
                </p>
                <p class="con-info-address-text">Záříčí 68</p>
                <p class="con-info-address-text">768 11 Záříčí</p>
                <p class="con-info-address-text con-info-text-mb">Česká republika</p>
                <p class="con-info-address-text">
                    <span class="con-info-address-text-bold">IČO: </span> 10822828
                </p>
                <p class="con-info-address-text con-info-text-mb">
                    <span class="con-info-address-text-bold">DIČ: </span> CZ10822828
                </p>
                <p class="con-info-address-text">
                    <span class="con-info-address-text-bold">Spisová značka:</span>
                </p>
                <p class="con-info-address-text">C 124867/KSBR Krajský soud v Brně</p>
            </div>
            <div class="con-info-address-map-wrap">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34945.657960428834!2d17.32174308445756!3d49.38334128473192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4f8b82440d9ba0f9%3A0xeebc4e0413033659!2sDyboatrans%20s.r.o.!5e0!3m2!1scs!2scz!4v1681502719867!5m2!1scs!2scz"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        {{-- Order --}}
        <div class="con-info-order-wrap">
            <h2 class="con-info-order-title">
                <i class="fa-solid fa-phone"></i>
                Objednávka
            </h2>
            <p class="con-info-order-text con-info-text-mb">Karel Rizman</p>
            <p class="con-info-order-text">Mobil: +420 725 675 021</p>
            <p class="con-info-order-text">E-mail: dyboatrans@email.cz</p>
        </div>
        {{-- Transport --}}
        <div class="con-info-transport-wrap">
            <div class="con-info-transport-title-wrap">
                <div class="con-info-transport-title-inner-wrap">
                    <i class="fa-solid fa-car-side"></i>
                    <h2 class="con-info-transport-title">Poptávka dopravy</h2>
                </div>
            </div>
            {{-- Container --}}
            <div class="con-info-transport-container">
                {{-- Text Wrap --}}
                <div class="con-info-transport-text-wrap">
                    <p class="con-info-transport-text con-info-transport-text-bold">
                        Zajišťujeme zájezdovou dopravu po celé České republice i do
                        zahraničí.
                    </p>
                    <p class="con-info-transport-text con-info-text-mb">
                        Máte zájem o nezávaznou cenovou kalkulaci? Stačí
                        vyplnit jednoduchý formulář. Vaši poptávku zpracujeme a obratem Vás budeme kontaktovat.
                    </p>
                    <p class="con-info-transport-text con-info-text-mb">
                        Pro vypracování nabídky je nutno
                        zaslat poptávku v s těmito údaji:
                    </p>

                    <p class="con-info-transport-text">- zpětný kontakt</p>
                    <p class="con-info-transport-text">- termín zájezdu, přepravy</p>
                    <p class="con-info-transport-text">- trasa zájezdu, přepravy</p>
                    <p class="con-info-transport-text">- počet přepravovaných osob</p>
                    <p class="con-info-transport-text con-info-text-mb">- typ autobusu, požadavky na vybavení</p>

                    <p class="con-info-transport-text con-info-transport-text-bold con-info-text-mb">
                        Minimální fakturace je 2000,- Kč bez DPH.
                    </p>

                    <p class="con-info-transport-text">
                        Vaši objednávku přepravy můžete zaslat také přímo na e-mailovou adresu: dyboatrans@email.cz
                    </p>

                    <div class="con-info-transport-text-social-icons-wrap">
                        <a href="" class="con-info-transport-text-social-icon">
                            <i class="fa-brands fa-square-facebook"></i>
                        </a>
                        <a href="" class="con-info-transport-text-social-icon">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
                {{-- Form Wrap --}}
                <div class="con-info-transport-form-wrap">
                    <form action="/mail" method="POST" class="con-info-transport-form">
                        @csrf
                        <div class="con-info-transport-form-inputs-wrap">
                            <div class="con-info-transport-form-inputs-inner-wrap">
                                <div class="con-info-transport-form-input-item">
                                    <label for="fullname" class="con-info-transport-form-label">
                                        Vaše jméno *
                                    </label>
                                    <input type="text" name="fullname" class="con-info-transport-form-input">
                                </div>
                                <div class="con-info-transport-form-input-item">
                                    <label for="phone" class="con-info-transport-form-label">
                                        Telefon
                                    </label>
                                    <input type="text" name="phone" class="con-info-transport-form-input">
                                </div>
                                <div class="con-info-transport-form-input-item">
                                    <label for="departure" class="con-info-transport-form-label">
                                        Datum odjezdu *
                                    </label>
                                    <input type="text" name="departure" class="con-info-transport-form-input">
                                </div>
                                <div class="con-info-transport-form-input-item">
                                    <label for="destination" class="con-info-transport-form-label">
                                        Cílové místo *
                                    </label>
                                    <input type="text" name="destination" class="con-info-transport-form-input">
                                </div>
                                <div class="con-info-transport-form-input-item">
                                    <label for="vehicle_type" class="con-info-transport-form-label">
                                        Typ vozidla
                                    </label>
                                    <input type="text" name="vehicle_type" class="con-info-transport-form-input">
                                </div>
                            </div>
                            <div class="con-info-transport-form-inputs-inner-wrap">
                                <div class="con-info-transport-form-input-item">
                                    <label for="company" class="con-info-transport-form-label">
                                        Společnost
                                    </label>
                                    <input type="text" name="company" class="con-info-transport-form-input">
                                </div>
                                <div class="con-info-transport-form-input-item">
                                    <label for="email" class="con-info-transport-form-label">
                                        Email *
                                    </label>
                                    <input type="email" name="email" class="con-info-transport-form-input">
                                </div>
                                <div class="con-info-transport-form-input-item">
                                    <label for="arrival" class="con-info-transport-form-label">
                                        Datum návratu *
                                    </label>
                                    <input type="text" name="arrival" class="con-info-transport-form-input">
                                </div>
                                <div class="con-info-transport-form-input-item">
                                    <label for="people_count" class="con-info-transport-form-label">
                                        Počet osob *
                                    </label>
                                    <input type="text" name="people_count" class="con-info-transport-form-input">
                                </div>
                            </div>
                        </div>
                        <div class="con-info-transport-form-textarea-wrap">
                            <label for="additional_info" class="con-info-transport-form-label">
                                Doplňující informace
                            </label>
                            <textarea name="additional_info" class="con-info-transport-form-textarea">
                            </textarea>
                        </div>
                        <button class="con-info-transport-form-btn" type="submit">
                            Odeslat
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>