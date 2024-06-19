<div class="card">
    <div class="card-body">
        <h5 class="card-title">User Table</h5>

        <!-- Default Table -->
        <table class="table datatable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Seller</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quality</th>
                    <th scope="col">Status</th>

                </tr>
            </thead>
            <tbody>
                @foreach($usedOils as $usedOil)
                <tr>
                    <th scope="row">{{$usedOil->id}}</th>
                    <td>{{$usedOil->quantity}}</td>
                    <td>dick</td>
                    <td>{{$usedOil->price ?? "Unknown"}}</td>
                    <td>{{$usedOil->quality ?? "Unknown"}}</td>
                    <td>{{$usedOil->status}}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#editModal">
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#deleteModal">
                            Delete
                        </button>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <!-- End Default Table Example -->
    </div>
</div>
