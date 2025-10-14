<section id="contact" class="mb-5" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <h2 class="text-center mb-4 fw-bold">Contact Us</h2>

        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="card shadow-lg border-1">
                    <div class="row g-0">

                        <!-- Image -->
                        <div class="col-md-6">
                            <img src="{{ asset('images/9.jpg') }}" alt="Contact Apartments"
                                class="img-fluid w-100 h-100" style="object-fit: cover;">
                        </div>
                        <!-- Form -->
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="card-body p-4 w-100">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row g-3">
                                        <!-- Full Name -->
                                        <div class="col-md-6">
                                            <input type="text"
                                                class="form-control form-control-lg shadow-sm rounded-pill px-4 py-2"
                                                id="name" name="name" placeholder="Full Name" required>
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <input type="email"
                                                class="form-control form-control-lg shadow-sm rounded-pill px-4 py-2"
                                                id="email" name="email" placeholder="Email Address" required>
                                        </div>

                                        <!-- Phone -->
                                        <div class="col-md-6">
                                            <input type="text"
                                                class="form-control form-control-lg shadow-sm rounded-pill px-4 py-2"
                                                id="phone" name="phone" placeholder="Phone Number" required>
                                        </div>

                                        <!-- Subject -->
                                        <div class="col-md-6">
                                            <input type="text"
                                                class="form-control form-control-lg shadow-sm rounded-pill px-4 py-2"
                                                id="subject" name="subject" placeholder="Subject" required>
                                        </div>

                                        <!-- Message -->
                                        <div class="col-12">
                                            <textarea class="form-control form-control-lg shadow-sm rounded-4 px-4 py-3"
                                                id="message" name="message" rows="4" placeholder="Your Message..."
                                                required></textarea>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="col-12 text-center">
                                            <button type="submit"
                                                class="btn btn-primary btn-lg shadow rounded-pill px-5 mt-2">
                                                Send 
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>