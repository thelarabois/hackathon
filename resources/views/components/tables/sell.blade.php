<table class="table datatable">
<thead>
    <tr>
        <th scope="col">ID</th>
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
        <td>{{ $usedOil->seller->name }}</td>
        <td>{{$usedOil->price ?? "Unknown"}}</td>
        <td>{{$usedOil->quality ?? "Unknown"}}</td>
        <td>{{$usedOil->status}}</td>
    </tr>
    @endforeach
</table>
