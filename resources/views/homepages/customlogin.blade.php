@include('homepages.header')

<div class="container d-flex justify-content-center align-items-center min-vh-100" data-aos="zoom-in"
    data-aos-duration="1000" s>
    <div class="row shadow-lg rounded-4 overflow-hidden" style="max-width: 850px; width: 100%;">

        <div class="col-md-6 d-none d-md-block p-0">
            <img src="{{ asset('images/login.jpg') }}" alt="Login Illustration" class="img-fluid h-100 w-100"
                style="object-fit: cover;">
        </div>
        <div class="col-md-6 bg-white p-4">
            <h3 class="text-center fw-bold mb-3">Login</h3>
            <p class="text-center text-muted">Sign in to your account</p>

            <form method="POST" action="{{ route('customer.login') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">Email Address</label>
                    <input type="email" name="email" class="form-control rounded-3" placeholder="Enter your email"
                        required autofocus>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control rounded-3"
                        placeholder="Enter your password" required>
                </div>

                @error('email')
                    <div class="text-danger small mb-2">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary w-100 rounded-3 fw-semibold">Submit</button>
            </form>
            <div class="text-center mt-3">
                <!-- <small class="text-muted">Don’t have an account?
                    <a href="{{ url('/customregister') }}" class="text-decoration-none">Register</a>
                </small> -->
            </div>
        </div>
    </div>
</div>

@include('homepages.linkloginregister')