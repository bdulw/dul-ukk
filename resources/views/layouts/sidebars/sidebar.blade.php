<aside class="main-sidebar sidebar-dark-primary elevation-2" style="background-color:  chocolate; font-family: 'Dancing Script', cursive;">    
    <!-- Brand Logo 
    <a href="#" class="brand-link">
        <img src="admlte/img/Logocafe1.png" alt="Logocafe" class="brand-image img-circle" style="opacity: 4">
        <span class="brand-text font-weight-light" style="color: white"><b>Garden <i>Cafe</i></b></span>
    </a>-->

    
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="admlte/img/user1-128x128.jpg" class="img-circle">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="color: black;"><h6><b>{{ Auth::user()->name }}</b></h6></a>
            </div>
        </div>

        <!-- SidebarSearch Form 
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <!-- Sidebar Admin -->
            @if (Auth::user()->level == 'admin')
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-house-user"></i>
                        <p style="color: white">Dashboard</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('activity.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-clock"></i>
                        <p style="color: white">Log Aktivitas</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('User.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p style="color: white">Add User</p>
                    </a>
                </li>
               <!--<li class="nav-item has-treeview">
                    <a href="{{ route('product.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p style="color: white">Menu</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('cart.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-cart-arrow-down"></i>
                        <p style="color: white">Keranjang</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('order.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-cash-register"></i>
                        <p style="color: white">Pembayaran</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p style="color: white">Customer</p>
                    </a>
                </li>-->
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p style="color: white">Logout</p>
                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
            <!-- /.Sidebar Admin -->

            <!-- Sidebar Manager -->
            @elseif (Auth::user()->level == 'manager')
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link ">
                            <i class="nav-icon fas fa-house-user"></i>
                            <p style="color: white">Dashboard Manager</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('product.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-utensils"></i>
                            <p style="color: white">Menu</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('activity.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-user-clock"></i>
                            <p style="color: white">Log Aktivitas</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('laporan.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p style="color: white">Catatan Transaksi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p style="color: white">Logout</p>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            <!-- /.Sidebar Manager -->

            <!-- Sidebar Kasir -->
            @else
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link ">
                            <i class="nav-icon fas fa-house-user"></i>
                            <p style="color: white">Dashboard Kasir</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('cart.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-cart-plus"></i>
                            <p style="color: white">Keranjang</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item has-treeview">
                        <a href="{{ route('order.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-cash-register"></i>
                            <p style="color: white">Pembayaran</p>
                        </a>
                    </li> --}}
                    <li class="nav-item has-treeview">
                        <a href="{{ route('laporan.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p style="color: white">Catatan Transaksi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p style="color: white">Logout</p>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            <!-- /.Sidebar Kasir -->
            @endif
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
