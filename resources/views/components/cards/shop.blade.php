<div class="card">
    <div class="card-body">
        <h5 class="card-title">LGU Oil Stock: {{ $finalInventory }}</h5>
        <form class="row g-3 needs-validation" id="buyForm" method="POST" action="{{ route('transaction.buy') }}"
            novalidate>
            @csrf
            <div class="col-md-6">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" name="quantity" placeholder="Enter quantity" required>
                <div class="invalid-feedback">
                    Please enter quantity.
                </div>
            </div>
            <div class="col-md-6">
                <label for="purpose" class="form-label">Purpose</label>
                <input type="text" class="form-control" name="purpose" placeholder="Purpose of purchase" required>
                <div class="invalid-feedback">
                    Please enter your purpose.
                </div>
            </div>
            <div class="mb-12">
                <div class="col-sm-12 text-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#confirmationModal">Buy</button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Modal Confirmation --}}
<div class="modal fade" id="confirmationModal" tabindex="-1">
    <div class="modal-dialog modal-m modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to purchase this oil?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"
                    onclick="document.getElementById('buyForm').submit()">Confirm</button>
            </div>
        </div>
    </div>
</div>
