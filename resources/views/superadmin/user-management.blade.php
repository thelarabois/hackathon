@extends('dashboard.index')
@section('user-management')
    <div class="mt-3 mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
            Add User
        </button>
    </div>
    @include('components.modals.user')
    <x-tables-user />
@endsection
