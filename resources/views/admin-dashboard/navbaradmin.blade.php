<div class="content w-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container-fluid">
            <button class="btn btn-outline-light d-md-none me-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu">
                <i class="bi bi-list"></i>
            </button>
            <a class="navbar-brand"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">

                    <!-- Notification -->
                    <li class="nav-item me-3">
                        <a class="nav-link position-relative  me-3" href="#">
                            <i class="bi bi-bell fs-5 text-white"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                            </span>
                        </a>
                    </li>

                    <!-- Messages -->
                    <li class="nav-item me-3">
                        <a class="nav-link position-relative  me-3" href="#">
                            <i class="bi bi-envelope fs-5 text-white "></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                5
                            </span>
                        </a>
                    </li>
                    <!-- Profile -->
                    <li class="nav-item d-flex align-items-center">
                        <img src="{{ asset('img/ad.png') }}" alt="Admin Profile" class="rounded-circle me-4 border"
                            width="50" height="50">
                        <span class="text-white fw-bold">Admin</span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>