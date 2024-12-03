<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a wire:navigate href="{{ route('dashboard') }}" class="logo">
                <img src="{{ asset('assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a wire:navigate href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Data</h4>
                </li>
                <li class="nav-item">
                    <a wire:navigate href="{{ route('user') }}">
                        <i class="fas fa-user"></i>
                        <p>Data User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#mproduct">
                        <i class="fas fa-box"></i>
                        <p>Data Produk</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="mproduct">
                        <ul class="nav nav-collapse">
                            <li>
                                <a wire:navigate href="{{ route('category') }}">
                                    <span class="sub-item">Kaegori Product</span>
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('product') }}">
                                    <span class="sub-item">Product</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a wire:navigate href="{{ route('supplier') }}">
                        <i class="fas fa-store"></i>
                        <p>Data Supplier</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Penjualan</h4>
                </li>
                <li class="nav-item">
                    <a wire:navigate href="{{ route('supplier') }}">
                        <i class="fas fa-cash-register"></i>
                        <p>Penjualan</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <div class="d-flex ps-4">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <div class="col-12">
                                <button type="submit"
                                    class="btn btn-sm btn-secondary d-flex justify-content-between align-items-center">
                                    <i class="fa-solid fa-right-from-bracket me-2"></i> Logout
                                </button>
                            </div>
                        </form>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
