<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 mt-5 ms-4 mb-5">
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                    href="{{ route('home') }}">
                    <i class="fas fa-home"></i>
                    <span class="ms-2">Home</span>
                </a>
            </li>
            @if (Auth::user()->role_id == 1)
                <li class="nav-item mb-2">
                    <a class="nav-link {{ request()->is('home/invoice') ? 'active' : '' }}"
                        href="{{ route('home.invoice') }}">
                        <i class="fas fa-file-invoice"></i>
                        <span class="ms-2">Invoice</span>
                    </a>
                </li>
            @else
                <li class="nav-item mb-2">
                    <a class="nav-link {{ request()->is('home/invoiceUser/' . Auth::user()->id) ? 'active' : '' }}"
                        href="{{ route('home.invoiceUser', Auth::user()->id) }}">
                        <i class="fas fa-file-invoice"></i>
                        <span class="ms-2">Invoice</span>
                    </a>
                </li>
            @endif
            @if (Auth::user()->role_id == 1)
                <li class="nav-item mb-2">
                    <a class="nav-link {{ request()->is('home/orderlist') ? 'active' : '' }}"
                        href="{{ route('home.orderlist') }}">
                        <i class="fas fa-list"></i>
                        <span class="ms-2">Order List</span>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link {{ request()->is('home/sparepart') ? 'active' : '' }}"
                        href="{{ route('home.sparepart') }}">
                        <i class="fas fa-tools"></i>
                        <span class="ms-2">Sparepart</span>
                    </a>
                </li>
            @endif
        </ul>
        <div class="position-sticky pt-3 mt-5 ms-3">
            <i class="fas fa-map-marker-alt"></i>
            <span>
                Ngebengkel, Jl. Sukajadi No.131-139, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162
            </span>
        </div>
    </div>
</nav>
