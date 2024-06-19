@extends('dashboard.index')
@section('content')
<div class="mt-3 mb-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
        Sell
    </button>
</div>
@include('components.modals.sell')
@include('components.tables.sell')
@endsection
