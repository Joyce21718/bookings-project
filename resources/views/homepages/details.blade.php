@foreach($apartments as $index => $apartment)
<!-- Modal -->
<div class="modal fade" id="apartment{{ $index + 1 }}" tabindex="-1" aria-labelledby="apartmentLabel{{ $index + 1 }}"
  aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="apartmentLabel{{ $index + 1 }}">{{ $apartment['name'] ?? 'No Name' }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
          <!-- Left: Image -->
          <div class="col-md-6">
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
          </div>

          <!-- Right: Details -->
          <div class="col-md-6">
            <ul class="list-unstyled">
              <li><strong>Location:</strong> {{ $apartment['location'] ?? 'N/A' }}</li>
              <li><strong>Price:</strong> ₱{{ number_format($apartment['price'] ?? 0) }} / month</li>
              <li><strong>Size:</strong> {{ $apartment['size'] ?? 'N/A' }}</li>
              <li><strong>Status:</strong>
                @if($apartment['available'] ?? false)
                <span class="badge bg-success">Available</span>
                @else
                <span class="badge bg-secondary">Unavailable</span>
                @endif
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="{{ route('booknow.create', $apartment['id']) }}" class="btn btn-primary">
          <i class="bi bi-check-circle-fill"></i> Book Now
        </a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach