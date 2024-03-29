<section class="full-box cover dashboard-sideBar">
    <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
    <div class="full-box dashboard-sideBar-ct">
        <!--SideBar Title -->
        @php
Session::get('CodClient');
    @endphp
        <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
            company <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
        </div>
        <div class="full-box dashboard-sideBar-UserInfo">
            <figure class="full-box">
                <img src={!!asset('./assets/avatars/AdminMaleAvatar.png')!!} alt="UserIcon">
                <figcaption class="text-center text-titles">{{ session()->get('username', 'default') }}</figcaption>
            </figure>
            <ul class="full-box list-unstyled text-center">
                <li>
                    <a href="my-data" title="Mis datos">
                        <i class="zmdi zmdi-account-circle"></i>
                    </a>
                </li>
                <li>
                    <a href="my-account" title="Mi cuenta">
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>
                <li>
                    <a href="/logout" title="Salir del sistema">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- SideBar Menu -->
        <ul class="list-unstyled full-box dashboard-sideBar-Menu">
            @if(session()->get('nivel', 'default')<4)
            <li>
                <a href="/home">
                    <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
                </a>
            </li>
            @if (session()->get('nivel', 'default')<3)
            <li>
                <a href="#!" class="btn-sideBar-SubMenu">
                    <i class="zmdi zmdi-case zmdi-hc-fw"></i> Administración <i class="zmdi zmdi-caret-down pull-right"></i>
                </a>
                <ul class="list-unstyled full-box">
                    <li>
                        <a href="company"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Empresa</a>
                    </li>
                    <li>
                        <a href="category"><i class="zmdi zmdi-labels zmdi-hc-fw"></i> Categorías</a>
                    </li>
                    <li>
                        <a href="provider"><i class="zmdi zmdi-truck zmdi-hc-fw"></i> Proveedores</a>
                    </li>
                    <li>
                        <a href="book"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Nuevo libro</a>
                    </li>
                </ul>
            </li>                
            @endif

            <li>
                <a href="#!" class="btn-sideBar-SubMenu">
                    <i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
                </a>
                <ul class="list-unstyled full-box">
                    @if (session()->get('nivel', 'default')==1)
                    <li>
                        <a href="admin"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administradores</a>
                    </li>                    
                    @endif
                    <li>
                        <a href="client"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Clientes</a>
                    </li>
                </ul>
            </li>
            @endif
            <li>
                <a href="/catalogo">
                    <i class="zmdi zmdi-book-image zmdi-hc-fw"></i> Catalogo
                </a>
            </li>
        </ul>
    </div>
</section>