<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white border fixed-top">
    <div class="container">
        <a class="navbar-brand text-primary fw-bold fs-2 " href="{{ route('home') }}">ApartmentEase</a>
        <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all_apartment') }}">Apartments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary ms-2" href="{{ route('customlogin') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
