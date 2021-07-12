<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('AdminLte/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Modo administrador</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('AdminLte/img/avatar04.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block">Administrador</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                        <i class="nav-icon fa fa-th"></i>
                        <p>
                            Volver a inicio
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('pagos.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-pie-chart"></i>
                        <p>
                            Administrar pagos
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('planes.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-pie-chart"></i>
                        <p>
                            Administrar planes
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('personas.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-tree"></i>
                        <p>
                            Administrar miembros
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('productos.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-tree"></i>
                        <p>
                            Administrar productos
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
