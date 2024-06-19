<div>
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? '' : 'collapsed' }}"
                    href="{{ route('dashboard.index') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            @if (auth()->user()->role === 'superadmin')
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('superadmin.index') }}">
                        <i class="bi bi-person"></i>
                        <span>User Management</span>
                    </a>
                </li><!-- End Dashboard Nav -->
            @endif


            @if (auth()->user()->role === 'admin')
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('superadmin.index') }}">
                        <i class="bi bi-person"></i>
                        <span>Users</span>
                    </a>
                </li><!-- End Dashboard Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('inventory.index') }}">
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
                    <a class="nav-link collapsed" href="/top-sme-seller">
                        <i class="bi bi-trophy"></i>
                        <span>Top SME Seller</span>
                    </a>
                </li><!-- End Dashboard Nav -->
            @endif

            @if (auth()->user()->role === 'genpub')
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/shop">
                        <i class="bi bi-cart"></i>
                        <span>Shop</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/transactions">
                        <i class="bi bi-receipt"></i>
                        <span>Transactions</span>
                    </a>
                </li><!-- End Dashboard Nav -->
            @endif


            @if (auth()->user()->role === 'sme')
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/sell">
                        <i class="bi bi-currency-dollar"></i>
                        <span>Sell</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/rewards">
                        <i class="bi bi-gift"></i>
                        <span>Rewards</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/transactions">
                        <i class="bi bi-receipt"></i>
                        <span>Transactions</span>
                    </a>
                </li><!-- End Dashboard Nav -->
            @endif
        </ul>

    </aside>
</div>
