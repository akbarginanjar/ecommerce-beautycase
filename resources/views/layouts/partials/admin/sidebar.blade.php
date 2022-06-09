<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item pt-2">
                    <a class="{{ Request::is('admin') ? 'active' : '' }} sidebar-link waves-effect waves-dark sidebar-link"
                        href="/admin/" aria-expanded="false">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.html"
                        aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="hide-menu">Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="{{ Request::is('admin/barang') ? 'active' : '' }} sidebar-link waves-effect waves-dark sidebar-link"
                        href="/admin/barang/" aria-expanded="false">
                        <i class="fa fa-table" aria-hidden="true"></i>
                        <span class="hide-menu">Barang</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="fontawesome.html"
                        aria-expanded="false">
                        <i class="fa fa-font" aria-hidden="true"></i>
                        <span class="hide-menu">Icon</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="map-google.html"
                        aria-expanded="false">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <span class="hide-menu">Google Map</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.html"
                        aria-expanded="false">
                        <i class="fa fa-columns" aria-hidden="true"></i>
                        <span class="hide-menu">Blank Page</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="404.html" aria-expanded="false">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <span class="hide-menu">Error 404</span>
                    </a>
                </li>
                <li class="text-center p-20 upgrade-btn">
                    <a class="btn d-grid text-white btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
