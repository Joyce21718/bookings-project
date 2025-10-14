@include('homepages.header')
@include('homepages.navbar')

<section class="container py-5" data-aos="fade-up" data-aos-duration="1000">
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
        <h2 class="fw-bold mb-3 mb-md-0">Featured Apartments</h2>

        <!-- Search Bar -->
        <form class="d-flex" role="search" style="max-width: 500px; width: 100%;">
            <input class="form-control form-control-lg me-2 shadow-sm rounded-pill px-4 py-2 border-primary"
                type="search" placeholder="Search apartments..." aria-label="Search">

            <button class="btn btn-primary btn-lg shadow-sm rounded-pill px-4" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </form>

    </div>

    <div class="row g-4 mt-5">
        @foreach($apartments as $apartment)
        <div class="col-md-4">
            <div class="card apartment-card h-100 position-relative shadow-sm border-0 rounded-3">

                {{-- Status Badge --}}
                @if($apartment['available'])
                <span class="badge bg-primary position-absolute top-0 end-0 m-2">Available</span>
                @else
                <span class="badge bg-secondary position-absolute top-0 end-0 m-2">Unavailable</span>
                @endif

                {{-- Image --}}
                @if(isset($apartment['image']) && $apartment['image'])
                @if(Str::contains($apartment['image'], '/'))
                <img src="{{ asset('apartments/' . $apartment['image']) }}" class="card-img-top rounded-top"
                    alt="{{ $apartment['name'] ?? 'Apartment' }}" style="height:200px; object-fit:cover;">
                @else
                <img src="{{ asset('apartments/' . $apartment['image']) }}" class="card-img-top rounded-top"
                    alt="{{ $apartment['name'] ?? 'Apartment' }}" style="height:200px; object-fit:cover;">
                @endif
                @else
                <img src="{{ asset('images/default.jpg') }}" class="card-img-top rounded-top" alt="No image"
                    style="height:200px; object-fit:cover;">
                @endif

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $apartment['name'] ?? 'No name' }}</h5>
                    <p class="card-text text-muted mb-2">
                        {{ $apartment['location'] ?? '' }} · {{ $apartment['size'] ?? '' }}
                    </p>
                    <p class="text-success fw-bold mb-3">
                        ₱{{ number_format($apartment['price']) }} / month
                    </p>


                    <!-- Buttons -->
                    <div class="mt-auto d-flex justify-content-between">
                        <a href="{{ route('booknow.create', $apartment['id']) }}" class="btn btn-primary">
                            Book Now
                        </a>


                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#apartment{{ $loop->index + 1 }}">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@include('homepages.details')
@include('homepages.footer')