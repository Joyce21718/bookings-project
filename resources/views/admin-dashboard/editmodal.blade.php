<div class="modal fade" id="editBookingModal{{ $booking->id }}" tabindex="-1"
    aria-labelledby="editBookingLabel{{ $booking->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('admin.bookings.update', $booking->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-content shadow-lg rounded-4 border-0">
                <div class="modal-header bg-success text-white rounded-top-4">
                    <h5 class="modal-title">Update Booking</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body bg-dark">
                    <div class="mb-3 text-center">
                        <strong>{{ $booking->fullname }}</strong> booked
                        <span class="text-success">{{ $booking->apartment->apartment_name ?? '-' }}</span>
                        (Room: {{ $booking->apartment->room_no ?? '-' }})
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select bg-dark text-white">
                            <option value="Pending" {{ $booking->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Approved" {{ $booking->status == 'Approved' ? 'selected' : '' }}>Approved
                            </option>
                            <option value="Rejected" {{ $booking->status == 'Rejected' ? 'selected' : '' }}>Rejected
                            </option>
                            <option value="Paid" {{ $booking->status == 'Paid' ? 'selected' : '' }}>Paid</option>
                        </select>
                    </div>

                    <!-- Admin Note -->
                    <div class="mb-3">
                        <label class="form-label">Admin Note</label>
                        <textarea name="admin_note" class="form-control" rows="3"
                            placeholder="Optional note">{{ $booking->admin_note ?? '' }}</textarea>
                    </div>
                </div>

                <div class="modal-footer bg-dark">
                    <button type="button" class="btn btn-secondary rounded-pill px-4"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success rounded-pill px-4">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>