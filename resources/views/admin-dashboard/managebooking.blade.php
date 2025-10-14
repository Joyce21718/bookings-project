@include('admin-dashboard.headeradmin')
@include('admin-dashboard.sidebaradmin')
@include('admin-dashboard.navbaradmin')


<div class="container-fluid my-4">
    <div class="card shadow-lg">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-dark align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Apartment Image</th>
                            <th>Customer</th>
                            <th>Apartment</th>
                            <th>Room no.</th>
                            <th>Check-in</th>
                            <th>Check-out</th>
                            <th>Price per Month</th>
                            <th>Payment</th>
                            <th>Proof Payment</th>
                            <th>Status</th>
                            <th>Requests</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking->id }}</td>

                                <!-- Apartment Image -->
                                <td>
                                    @if($booking->apartment && $booking->apartment->image)
                                        <img src="{{ asset('apartments/' . $booking->apartment->image) }}" width="70"
                                            height="70" class="rounded-circle" alt="{{ $booking['name'] ?? 'Apartment' }}">
                                    @else
                                        <img src="{{ asset('images/default.jpg') }}" width="50" alt="Apartment">
                                    @endif
                                </td>

                                <!-- Customer Name -->
                                <td>{{ $booking->fullname }}</td>

                                <!-- Apartment Name & Room No -->
                                <td>{{ $booking->apartment->apartment_name ?? '-' }}</td>
                                <td>{{ $booking->apartment->room_no ?? '-' }}</td>

                                <!-- Check-in / Check-out -->
                                <td>{{ $booking->checkin }}</td>
                                <td>{{ $booking->checkout }}</td>

                                <!-- Price -->
                                <td>₱{{ number_format($booking->apartment->price ?? 0) }}</td>

                                <!-- Payment Method -->
                                <td>{{ $booking->payment_method }}</td>

                                <!-- Proof Payment -->
                                <td>
                                    @if($booking->proof_payment)
                                        <a href="{{ asset('apartments/' . $booking->proof_payment) }}" target="_blank">View</a>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>{{ $booking->status ?? 'Pending' }}</td>
                                <td>{{ $booking->requests ?? '-' }}</td>

                                <!-- Actions -->
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal"
                                            data-bs-target="#editBookingModal{{ $booking->id }}">
                                            Edit
                                        </button>
                                        <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            @include('admin-dashboard.editmodal')
                        @endforeach

                        @if($bookings->isEmpty())
                            <tr>
                                <td colspan="13" class="text-center">No bookings found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
