{{-- Add Modal --}}

<div id="addModal" tabindex="-1">
    <div>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Purchase Oil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3 needs-validation" method="POST" action="{{route('superadmin.add')}}" novalidate>
                    @csrf
                    <div class="col-md-5">
                        <label for="first_name" class="form-label">Quantity</label>
                        <input type="number" class="form-control" name="name" placeholder="Enter quantity"
                            required>
                        <div class="invalid-feedback">
                            Please enter quantity.
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="email" class="form-label">Purpose</label>
                        <input type="text" class="form-control" name="reason" placeholder="Purpose of purchase"
                            required>
                        <div class="invalid-feedback">
                            Please enter your purpose.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>