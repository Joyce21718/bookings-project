<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="text-center my-5">
                <img src="{{ asset('images/user.jpg') }}" alt="User Profile" class="rounded-circle img-fluid mb-3"
                    style="width: 150px; height: 150px; object-fit: cover;">

                <h2 class="fw-bold text-white">
                    Welcome, {{ session('customer_name', 'Guest') }}!
                </h2>
                <p class="text-white">
                    Here you can manage your bookings, view apartments, and more.
                </p>
            </div>
        </div>
    </div>
</div>