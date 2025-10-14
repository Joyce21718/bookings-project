@include('usersdashboard.header')
@include('usersdashboard.sidebar')
@include('usersdashboard.navbar')
@include('usersdashboard.card')
<section id="my-bookings" class="py-4">
    <div class="">
        <h2 class="text-center fw-bold mb-4 text-white">
            My Bookings
        </h2>
        <div class="my-4">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-dark align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Apartment</th>
                                    <th>Room no.</th>
                                    <th>Check-In</th>
                                    <th>Check-Out</th>
                                    <th>Price per Month</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = 1; 
                                @endphp
                                @forelse($bookings as $booking)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>
                                            @if($booking->apartment && $booking->apartment->image)
                                                <img src="{{ asset('apartments/' . $booking->apartment->image) }}" width="70"
                                                    height="70" class="rounded-circle"
                                                    alt="{{ $booking->apartment->apartment_name ?? 'Apartment' }}">
                                            @else
                                                <img src="{{ asset('images/default.jpg') }}" width="50" alt="Apartment">
                                            @endif
                                        </td>
                                        <td>{{ $booking->apartment->apartment_name ?? '-' }}</td>
                                        <td>{{ $booking->apartment->room_no ?? '-' }}</td>
                                        <td>{{ $booking->checkin }}</td>
                                        <td>{{ $booking->checkout }}</td>
                                        <td>₱{{ number_format($booking->apartment->price ?? 0) }}</td>
                                        <td>{{ $booking->payment_method ?? '-' }}</td>

                                        <!-- Status Column -->
                                        <td class="text-center">
                                            @if(strtolower($booking->status) === 'pending')
                                                <span class="badge bg-warning text-dark">Pending</span>
                                            @elseif(strtolower($booking->status) === 'approved')
                                                <span class="badge bg-success">Approved</span>
                                            @elseif(strtolower($booking->status) === 'rejected')
                                                <span class="badge bg-danger">Rejected</span>
                                            @elseif(strtolower($booking->status) === 'paid')
                                                <span class="badge bg-primary">Paid</span>
                                            @elseif(strtolower($booking->status) === 'cancelled')
                                                <span class="badge bg-secondary">Cancelled</span>
                                            @else
                                                <span class="badge bg-light text-dark">{{ $booking->status ?? 'N/A' }}</span>
                                            @endif
                                        </td>

                                        <!-- Action Column -->
                                        <td class="text-center">
                                            @if(in_array(strtolower($booking->status), ['pending', 'approved']))
                                                <form action="{{ route('user.bookings.cancel', $booking->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-sm btn-danger">Cancel</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">No bookings found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>