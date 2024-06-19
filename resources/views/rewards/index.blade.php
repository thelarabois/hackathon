@extends('dashboard.index')
@section('content')

        <div class="col-lg-12">
            {{-- @include('components.cards.leaderboard') --}}
            @include('components.tables.rewards')
        </div>
   
@endsection
