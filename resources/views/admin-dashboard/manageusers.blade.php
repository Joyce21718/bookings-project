@include('admin-dashboard.headeradmin')
@include('admin-dashboard.sidebaradmin')
@include('admin-dashboard.navbaradmin')

<div class="container-fluid my-4">
    <div class="card shadow-lg">
        <div class="card-body">
           
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-dark align-middle">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FullName</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($customers as $customer)
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td>{{ $customer->fullname }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>********</td>
                                    <td>{{ ucfirst($customer->role) }}</td>
                                    <td>{{ ucfirst($customer->status) }}</td>
                             <td class="text-center">
                                 <div class="d-flex justify-content-center gap-2">
                                   <a href="" class="btn btn-sm btn-warning">Edit</a>
                                      <form action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST">
                                         @csrf
                                        @method('DELETE')
                                     <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                     </form>
                                </div>
                            </td>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">No Tenants found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>