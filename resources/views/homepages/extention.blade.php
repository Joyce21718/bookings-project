<section class="container mt-7 mb-5" id="about" data-aos="fade-up" data-aos-duration="1000">
    <div class="row align-items-center g-5">

        <!--images -->
        <div class="col-md-6">
            <div class="row g-2">
                <div class="col-6">
                    <img src="{{ asset('images/11.jpg') }}" class="img-fluid rounded shadow-sm about-img"
                        alt="Apartment 1">
                </div>
                <div class="col-6">
                    <img src="{{ asset('images/8.jpg') }}" class="img-fluid rounded shadow-sm about-img"
                        alt="Apartment 2">
                </div>
                <div class="col-6">
                    <img src="{{ asset('images/9.jpg') }}" class="img-fluid rounded shadow-sm about-img"
                        alt="Apartment 3">
                </div>
                <div class="col-6">
                    <img src="{{ asset('images/10.jpg') }}" class="img-fluid rounded shadow-sm about-img"
                        alt="Apartment 4">
                </div>
            </div>
        </div>

        <!--Text -->
        <div class="col-md-6">
            <h2 class="mb-4 fw-bold">About Our ApartmentEase</h2>
            <p class="text-muted">
                Our ApartmentEase makes it simple for users to search and book apartments online.
                It provides real-time availability, transparent pricing, and secure online transactions.
            </p>
            <ul class="list-unstyled">
                <li class="mb-2">
                    <i class="bi bi-check-circle-fill text-success me-2"></i> Search apartments easily
                </li>
                <li class="mb-2">
                    <i class="bi bi-check-circle-fill text-success me-2"></i> Check availability in real-time
                </li>
                <li class="mb-2">
                    <i class="bi bi-check-circle-fill text-success me-2"></i> Secure online payments
                </li>
                <li>
                    <i class="bi bi-check-circle-fill text-success me-2"></i> Manage multiple bookings
                </li>
            </ul>
            <a class="btn btn-primary mt-3 px-4" href="{{ route('all_apartment') }}">Explore Features</a>
        </div>
    </div>
</section>