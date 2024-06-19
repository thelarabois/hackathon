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
          </tr>
        </thead>
        <tbody>
        @foreach($users as $userData)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$userData->name}}</td>
            <td>{{$userData->email}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <!-- End Default Table Example -->
    </div>
  </div>