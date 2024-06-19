@extends('dashboard.index')
@section('content')
    <div class="mt-3 mb-3">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
            Sell
        </button>
    </div>
    <div class="col-lg-12">
        @include('components.modals.sell_inventory')
        @include('components.tables.inventory')
    </div>
@endsection
