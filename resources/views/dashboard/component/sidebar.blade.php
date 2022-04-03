<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item pt-2">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route("dash-home") }}"
                        aria-expanded="false">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="hide-menu">Accueil</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route("dash-user") }}"
                        aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="hide-menu">Utilisateurs</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="basic-table.html"
                        aria-expanded="false"
                    >
                        <i class="fa fa-table" aria-hidden="true"></i>
                        <span class="hide-menu">Basic Table</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="fontawesome.html"
                        aria-expanded="false"
                    >
                        <i class="fa fa-font" aria-hidden="true"></i>
                        <span class="hide-menu">Icon</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="map-google.html"
                        aria-expanded="false"
                    >
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <span class="hide-menu">Google Map</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="blank.html"
                        aria-expanded="false"
                    >
                        <i class="fa fa-columns" aria-hidden="true"></i>
                        <span class="hide-menu">Blank Page</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="404.html"
                        aria-expanded="false"
                    >
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <span class="hide-menu">Error 404</span>
                    </a>
                </li>
                <li class="text-center p-20 upgrade-btn">
                    <form method="POST" action="{{ route("logout") }}">
                        @csrf
                        <input type="submit" class="btn btn-danger text-white" value="Se déconnecter">
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
