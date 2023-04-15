<nav class="admin-nav">
    <img src="{{ URL::to('/') }}/imgs/nav/nav-logo.svg" alt="Admin Navbar Logo" class="admin-nav-logo">
    @auth
    <form action="/admin/logout" method="POST" class="admin-nav-form">
        @csrf
        <button type="submit" class="admin-nav-logout-btn">
            <i class="fa-solid fa-right-from-bracket"></i>
        </button>
    </form>
    @endauth
</nav>