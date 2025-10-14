@include('homepages.header')
<section id="booknow" class=" bg-light d-flex align-items-center">
  <div class="container">
    <h2 class="text-center fw-bold mb-4 text-primary">
      <i class="bi bi-building-check"></i> Book Your Apartment
    </h2>
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <div class="card1 border-0 shadow rounded-4 overflow-hidden">
          <div class="row g-0">

            <!-- Left Side: Form -->
            <div class="col-lg-7 bg-white">
              <div class="card-header bg-primary text-white text-center py-2">
                <h6 class="mb-0"><i class="bi bi-calendar-event"></i> Reservation Form</h6>
              </div>
              <div class="card-body p-3">

                @if(session('success'))
                <div class="alert alert-success small">{{ session('success') }}</div>
                @endif

                <form action="{{ route('booknow.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="apartment_id" value="{{ $apartment->id }}">

                  <div class="row g-2">
                    <div class="col-md-6">
                      <label class="form-label small fw-semibold">Full Name</label>
                      <input type="text" class="form-control form-control-sm" name="fullname" required>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label small fw-semibold">Phone</label>
                      <input type="text" class="form-control form-control-sm" name="phone" required>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label small fw-semibold">Email</label>
                      <input type="email" class="form-control form-control-sm" name="email" required>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label small fw-semibold">Password</label>
                      <input type="password" class="form-control form-control-sm" name="password" required>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label small fw-semibold">Apartment</label>
                      <input type="text" class="form-control form-control-sm" value="{{ $apartment->apartment_name }}" readonly>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label small fw-semibold">Price per Month</label>
                      <input type="text" class="form-control form-control-sm" value="₱{{ number_format($apartment->price) }}" readonly>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label small fw-semibold">Check-in</label>
                      <input type="date" class="form-control form-control-sm" name="checkin" required>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label small fw-semibold">Check-out</label>
                      <input type="date" class="form-control form-control-sm" name="checkout" required>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label small fw-semibold">Payment</label>
                      <select class="form-select form-select-sm" name="payment_method" required>
                        <option value="GCash">GCash</option>
                        <option value="PayMaya">PayMaya</option>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label small fw-semibold">Proof of Payment</label>
                      <input type="file" class="form-control form-control-sm" name="proof_payment">
                    </div>

                    <div class="col-12">
                      <label class="form-label small fw-semibold">Requests</label>
                      <textarea class="form-control form-control-sm" rows="2" name="requests"></textarea>
                    </div>

                    <div class="col-12 text-center">
                      <button type="submit" class="btn btn-sm btn-primary px-4 rounded-pill mt-2">
                        <i class="bi bi-check-circle-fill"></i> Confirm
                      </button>
                    </div>
                  </div>
                </form>

              </div>
            </div>

            <!-- Right Side: Image -->
            <div class="col-lg-5 d-none d-lg-block">
              @if($apartment->image)
              <img src="{{ asset('apartments/' . $apartment->image) }}" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="{{ $apartment->apartment_name }}">
              @else
              <img src="{{ asset('images/default.jpg') }}" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="Apartment">
              @endif
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('homepages.linkloginregister')