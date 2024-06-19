<div class="card">
    <div class="card-body">
        <h5 class="card-title">Inventory Table</h5>

        <!-- Default Table -->
        <table class="table datatable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Quality</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Used Oil</td>
                    <td>5kg</td>
                    <td>Uknown</td>
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

                <tr>
                    <th scope="row">2</th>
                    <td>Purified Oil</td>
                    <td>8kg</td>
                    <td>Class A</td>
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

                <tr>
                    <th scope="row">3</th>
                    <td>Used Oil</td>
                    <td>2kg</td>
                    <td>Uknown</td>
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
            </tbody>
        </table>
        <!-- End Default Table Example -->
    </div>
</div>
