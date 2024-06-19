<div>
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? '' : 'collapsed' }}"
                    href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            @if (auth()->user()->role === 'superadmin')
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('user.index') }}">
                        <i class="bi bi-person"></i>
                        <span>User Management</span>
                    </a>
                </li><!-- End Dashboard Nav -->
            @endif

            @if (auth()->user()->role === 'admin')
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/users">
                        <i class="bi bi-person"></i>
                        <span>Users</span>
                    </a>
                </li><!-- End Dashboard Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/inventory">
                        <i class="bi bi-layout-text-window-reverse"></i>
                        <span>Inventory</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/transactions">
                        <i class="bi bi-receipt"></i>
                        <span>Transactions</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/sales">
                        <i class="bi bi-cash-coin"></i>
                        <span>Sales</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/rewards">
                        <i class="bi bi-gift"></i>
                        <span>Rewards</span>
                    </a>
                </li><!-- End Dashboard Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" href="/sales-table">
                        <i class="bi bi-cash-coin"></i>
                        <span>Sales Table</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/top-sme-seller">
                        <i class="bi bi-trophy"></i>
                        <span>Top SME Seller</span>
                    </a>
                </li><!-- End Dashboard Nav -->
            @endif
        </ul>

    </aside>
</div>
