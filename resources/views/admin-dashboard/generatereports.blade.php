@include('admin-dashboard.headeradmin')
@include('admin-dashboard.sidebaradmin')
@include('admin-dashboard.navbaradmin')
 
<div class="my-4">
  <div class="card shadow-lg">
    <div class="card-body">
      <div class="text-start mb-4">
        <button class="btn btn-success"><i class="bi bi-file-earmark-text"></i> Generate Report</button>
      </div>

      <!-- Report Filters -->
      <form>
        <div class="row g-3">
          <div class="col-md-3">
            <label class="form-label fw-bold">From Date</label>
            <input type="date" class="form-control">
          </div>
          <div class="col-md-3">
            <label class="form-label fw-bold">To Date</label>
            <input type="date" class="form-control">
          </div>
          <div class="col-md-3">
            <label class="form-label fw-bold">Report Type</label>
            <select class="form-select">
              <option>All Reports</option>
              <option>Bookings</option>
              <option>Payments</option>
              <option>Cancelled</option>
            </select>
          </div>
          <div class="col-md-3 d-flex align-items-end">
            <button type="submit" class="btn btn-success w-100"><i class="bi bi-search"></i> Filter</button>
          </div>
        </div>
      </form>
    </div>

    <!-- Report Table -->
    <div class="card-body">
      <div class="table-responsive">
        <table class="table align-middle">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Customer</th>
              <th>Apartment</th>
              <th>Check-in</th>
              <th>Check-out</th>
              <th>Amount</th>
              <th>Method</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
           
          </tbody>
        </table>
      </div>
    </div>

    <!-- Export Buttons -->
    <div class="card-body text-end">
      <button class="btn btn-outline-danger"><i class="bi bi-file-earmark-pdf"></i> Export PDF</button>
      <button class="btn btn-outline-success"><i class="bi bi-file-earmark-excel"></i> Export Excel</button>
      <button class="btn btn-outline-secondary"><i class="bi bi-printer"></i> Print</button>
    </div>
  </div>
</div>
