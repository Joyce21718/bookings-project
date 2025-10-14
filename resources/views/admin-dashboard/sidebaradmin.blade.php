<div class="wrapper">
    <!-- Sidebar -->
    <nav class="sidebar p-3 collapse d-md-block" id="sidebarMenu">
        <h3 class="text-center mb-4 fw-bold">
            <i class="bi bi-shield-lock-fill me-2 text-success"></i> Admin
        </h3>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('admin-dashboard') }}" class="nav-link active"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{ route('manageusers') }}" class="nav-link">
                    <i class="bi bi-people me-2"></i> Manage Users
                </a>
            </li>
            <li>
                <a href="{{ route('manageapartments') }}" class="nav-link"><i class="bi bi-people me-2"></i> Manage Apartments/Rooms</a>
            </li>
            <li>
                <a href="{{ route('managebooking') }}" class="nav-link"><i class="bi bi-receipt me-2"></i> Manage Bookings</a>
            </li>
            <li>
                <a href="{{ route('managepayment') }}" class="nav-link"><i class="bi bi-cash-coin me-2"></i> Manage Payments</a>
            </li>
            <li>
                <a href="{{ route('generatereports') }}" class="nav-link"><i class="bi bi-file-earmark-text me-2"></i> Generate Report</a>
            </li>
            <li>
                <a href="#" class="nav-link"><i class="bi bi-gear me-2"></i> Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a>
            </li>
        </ul>
    </nav>