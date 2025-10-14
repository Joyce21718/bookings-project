<div class="wrapper">
    <!-- Sidebar -->
    <nav class="sidebar p-3 collapse d-md-block" id="sidebarMenu">
        <h3 class="text-center mb-4 fw-bold">
           ApartmentEase
        </h3>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
           <li class="nav-item">
                <a href="{{ route('dashboardprofile') }}" class="nav-link active">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('mybookings') }}" class="nav-link">
                    <i class="bi bi-calendar-check me-2"></i> My Bookings
                </a>
            </li>
            <li>
                <a href="" class="nav-link">
                    <i class="bi bi-wallet2 me-2"></i> My Payments
                </a>
            </li>
            <li>
                <a href="" class="nav-link">
                    <i class="bi bi-person-circle me-2"></i> My Profile
                </a>
            </li>
            <li>
                <a href="" class="nav-link">
                    <i class="bi bi-gear me-2"></i> Settings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </li>
        </ul>
    </nav>