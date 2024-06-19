<div class="card">
    <div class="card-body">
      <h5 class="card-title">User Table</h5>

      <!-- Default Table -->
      <table class="table datatable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
          @foreach($users as $userData)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$userData->name}}</td>
            <td>{{$userData->email}}</td>
            <td>
              <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{$userData->id}}">
                Edit
              </button>
              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$userData->id}}">
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