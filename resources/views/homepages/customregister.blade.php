@include('homepages.header')

<div class="container d-flex justify-content-center align-items-center min-vh-100" data-aos="zoom-in"
    data-aos-duration="1000">
    <div class="row shadow-lg rounded-4 overflow-hidden" style="max-width: 850px; width: 100%; height: 400px;">

        <!-- Image -->
        <div class="col-md-6 d-none d-md-block p-0">
            <img src="{{ asset('images/login.jpg') }}" alt="Register" class="img-fluid h-100 w-100"
                style="object-fit: cover;">
        </div>

        <!-- Form -->
        <div class="col-md-6 bg-white p-4 d-flex flex-column justify-content-center">
            <h3 class="text-center fw-bold mb-3">Register</h3>
            <form method="POST" action="{{ route('customer.register') }}">
                @csrf
                <div class="row g-3">
                    <!-- Fullname -->
                    <div class="col-md-6">
                        <input type="text" name="fullname" class="form-control rounded-3" placeholder="Enter fullname"
                            required>
                    </div>
                    <!-- Email -->
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control rounded-3" placeholder="Enter email"
                            required>
                    </div>
                    <!-- Phone -->
                    <div class="col-md-6">
                        <input type="text" name="phone" class="form-control rounded-3" placeholder="Phone number"
                            required>
                    </div>
                    <!-- Password -->
                    <div class="col-md-6">
                        <input type="password" name="password" class="form-control rounded-3"
                            placeholder="Enter password" required>
                    </div>
                    <!-- Confirm Password -->
                    <div class="col-12">
                        <input type="password" name="password_confirmation" class="form-control rounded-3"
                            placeholder="Confirm password" required>
                    </div>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-primary w-100 rounded-3 fw-semibold mt-3">Submit</button>
            </form>

            <!-- Links -->
            <div class="text-center mt-3">
                <small class="text-muted">Already have an account?
                    <a href="{{ url('/customlogin') }}" class="text-decoration-none">Login</a>
                </small>
            </div>
        </div>
    </div>
</div>

@include('homepages.linkloginregister')