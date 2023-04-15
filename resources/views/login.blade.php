<x-admin-layout>
    <section class="login-wrap">
        <div class="login-card">
            <h1 class="login-card-title">Admin přístup</h1>

            <form action="/admin/signin" method="POST" class="login-card-form">
                @csrf

                <div class="login-card-form-item">
                    <label for="email" class="login-card-form-label">Email</label>
                    <input type="text" name="email" class="login-card-form-input">
                    @error("email")
                    <p class="login-card-error-text">{{$message}}</p>
                    @enderror
                </div>

                <div class="login-card-form-item">
                    <label for="password" class="login-card-form-label">Heslo</label>
                    <input type="password" name="password" class="login-card-form-input">

                </div>

                <div class="login-card-form-btn-wrap">
                    <button type="submit" class="login-card-form-btn">Přihlásit se</button>
                </div>
            </form>
        </div>

        <img src="{{ URL::to('/') }}/imgs/admin/admin-wave.svg" alt="Admin Wave Image" class="login-wave-img">
    </section>
</x-admin-layout>