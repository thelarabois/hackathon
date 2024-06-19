<div class="card">
    <div class="card-body">
        <h5 class="card-title">Pending Orders</h5>

        <!-- Default Table -->
        <table class="table datatable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Quality</th>
                    <th scope="col">Purpose</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Jayson Derulo</td>
                    <td>5kg</td>
                    <td>Uknown</td>
                    <td>To make soap</td>
                    <td>2024-06-19 22:15:58</td>
                    <td>
                        <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal"
                            data-bs-target="#editModal">
                            More details
                        </button>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#editModal">
                            Accept
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#deleteModal">
                            Cancel
                        </button>
                    </td>
                </tr>

                <tr>
                    <th scope="row">2</th>
                    <td>Amyel Tabudlo</td>
                    <td>8kg</td>
                    <td>Class A</td>
                    <td>To make lubricant</td>
                    <td>2024-06-19 22:15:58</td>
                    <td class="d-flex justify-content-center align-items-center">
                        <p class="text-muted">
                            Waiting for Transit
                        </p>
                    </td>
                </tr>

                <tr>
                    <th scope="row">3</th>
                    <td>Salvador Muckerberg</td>
                    <td>2kg</td>
                    <td>Uknown</td>
                    <td>To make fuel</td>
                    <td>2024-06-19 22:15:58</td>
                    <td>
                        <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal"
                            data-bs-target="#editModal">
                            More details
                        </button>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#editModal">
                            Accept
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#deleteModal">
                            Cancel
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End Default Table Example -->
    </div>
</div>
