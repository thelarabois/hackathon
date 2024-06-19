<x-app-layout>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>{{-- End Page Title --}}

        <section class="section dashboard">
            @if (auth()->user()->role === 'superadmin')
                @include('dashboard.superadmin')
            @endif
            @if (auth()->user()->role === 'admin')
                @include('dashboard.admin')
            @endif
            @if (auth()->user()->role === 'sme')
                @include('dashboard.sme')
            @endif
            @if (auth()->user()->role === 'genpub')
                @include('dashboard.genpub')
            @endif
        </section>

    </main>
</x-app-layout>
