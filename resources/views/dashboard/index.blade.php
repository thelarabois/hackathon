<x-app-layout>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1> {{ ucfirst(Route::current()->uri) }} </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">{{ ucfirst(Route::current()->uri) }}</li>
                </ol>
            </nav>
        </div>{{-- End Page Title --}}

        <div class="mt-3 mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                Add User
            </button>
        </div>

        <section class="section dashboard">
            @if (auth()->user()->role === 'superadmin')
                @include('dashboard.superadmin')
            @endif
            @if (auth()->user()->role === 'admin')
                @include('dashboard.admin')
            @endif
            @if (auth()->user()->role === 'sme')
                @include('dashboard.smes')
            @endif
            @if (auth()->user()->role === 'genpub')
                @include('dashboard.genpub')
            @endif
        </section>

    </main>
</x-app-layout>
