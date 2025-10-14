@include('admin-dashboard.headeradmin')
@include('admin-dashboard.sidebaradmin')
@include('admin-dashboard.navbaradmin')
<div class="container my-4">
  <div class="card shadow-lg">
    <div class="card-body">
      <div class="text-start mb-4">
        <button class="btn btn-success">+ Add Payment</button>
      </div>
      <!-- Payment Form -->
      <form>
        <div class="row g-3">
          <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Customer Name">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Apartment / Room">
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" placeholder="Amount">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" placeholder="Payment Date">
          </div>
          <div class="col-md-2">
            <select class="form-select">
              <option>Cash</option>
              <option>GCash</option>
              <option>Credit Card</option>
              <option>Bank Transfer</option>
            </select>
          </div>
          <div class="col-md-2">
            <select class="form-select">
              <option>Pending</option>
              <option>Paid</option>
              <option>Failed</option>
            </select>
          </div>
        </div>
      </form>
    </div>

    <!-- Payments Table -->
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped align-middle">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Customer</th>
              <th>Apartment</th>
              <th>Amount</th>
              <th>Payment Date</th>
              <th>Method</th>
              <th>Status</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
         
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>
