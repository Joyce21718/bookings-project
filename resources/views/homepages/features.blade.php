<!-- Featured Apartments -->
<section class="container mt-7 mb-4" data-aos="fade-up" data-aos-duration="1000">
    <h2 class="text-center mb-4">Featured Apartments</h2>
    <div class="row g-4">
        @foreach($featuredApartments as $index => $apartment)
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/' . $apartment['image']) }}" alt="{{ $apartment['name'] }}"
                        class="apartment-img">
                    <div class="card-body">
                        <h5 class="card-title">{{ $apartment['name'] }}</h5>
                        <p class="card-text">Location: {{ $apartment['location'] }}</p>
                        <p class="text-success fw-bold">₱{{ number_format($apartment['price']) }} / month</p>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#apartment{{ $index + 1 }}">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- Apartment Modals -->
@foreach($featuredApartments as $index => $apartment)
    <div class="modal fade" id="apartment{{ $index + 1 }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $apartment['name'] }}</h5>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('images/' . $apartment['image']) }}" class="img-fluid rounded mb-2">
                    <p><b>Location:</b> {{ $apartment['location'] }}</p>
                    <p><b>Size:</b> {{ $apartment['size'] }}</p>
                    <p class="text-success fw-bold">₱{{ number_format($apartment['price']) }} / month</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach