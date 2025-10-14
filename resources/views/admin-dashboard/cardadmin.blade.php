<!-- Cards -->
<div class="row g-4 mb-4">
    <div class="col-md-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Apartments</h5>
                    <i class="bi bi-building fs-2 text-success"></i>
                </div>
                  <p class="card-text fs-4 mt-2">{{ $apartmentsCount }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Tenants</h5>
                    <i class="bi bi-people fs-2 text-success"></i>
                </div>
                 <p class="card-text fs-4 mt-2">{{ $tenantsCount }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Payments</h5>
                    <i class="bi bi-receipt fs-2 text-success"></i>
                </div>
            <p class="card-text fs-4 mt-2">{{  $paymentsTotalCount }}</p>

            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Requests</h5>
                    <i class="bi bi-tools fs-2 text-success"></i>
                </div>
                <p class="card-text fs-4 mt-2">{{ $requestsCount  }}</p>
            </div>
        </div>
    </div>
</div>