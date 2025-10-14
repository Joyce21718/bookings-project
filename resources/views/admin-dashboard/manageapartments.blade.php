@include('admin-dashboard.headeradmin')
@include('admin-dashboard.sidebaradmin')
@include('admin-dashboard.navbaradmin')

<div class="container-fluid my-4">
    <div class="card shadow-lg">
        <div class="card-body">

            <form action="{{ route('admin.apartments.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-start mb-4">
                    <button type="submit" class="btn btn-success">+ Add Apartment/Room</button>
                </div>

                <div class="row g-3">
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="apartment_name" placeholder="Apartment Name"
                            required>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" name="location" required>
                            <option value="Sindangan">Sindangan</option>
                            <option value="Dapitan City">Dapitan City</option>
                            <option value="Dipolog City">Dipolog City</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="room_no" placeholder="Room No. / Unit" required>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" name="status" required>
                            <option value="Available">Available</option>
                            <option value="Occupied">Occupied</option>
                            <option value="Under Maintenance">Under Maintenance</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <input type="number" class="form-control" name="price" placeholder="Price per Month" required>
                    </div>
                    <div class="col-md-2">
                        <input type="file" class="form-control" name="image" accept="image/*">
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-dark align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Apartment</th>
                            <th>Location</th>
                            <th>Room no.</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($apartments as $apartment)
                            <tr>
                                <td>{{ $apartment->id }}</td>
                                <td>
                                    @if($apartment->image)
                                        <img src="{{ asset('apartments/' . $apartment->image) }}" width="70" height="70"
                                            class="rounded-circle">
                                    @else
                                        <span>No Image</span>
                                    @endif
                                </td>
                                <td>{{ $apartment->apartment_name }}</td>
                                <td>{{ $apartment->location }}</td>
                                <td>{{ $apartment->room_no }}</td>
                                <td>
                                    <span class="badge 
                                                @if($apartment->status == 'Available') bg-primary
                                                @elseif($apartment->status == 'Occupied') bg-danger 
                                                @else bg-warning text-dark @endif">
                                        {{ $apartment->status }}
                                    </span>
                                </td>
                                <td>₱{{ number_format($apartment->price, 2) }}</td>
                                <td class="text-center">
                                    <form action="{{ route('admin.apartments.destroy', $apartment->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No apartment found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>