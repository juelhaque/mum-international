<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #04364A">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
        <img src="{{ asset('ui/backend/img/at 3.49.08 PM.jpeg') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text">MUM INTERNATIONAL</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('categories.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link">
                        <i class="nav-icon fab fa-product-hunt"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('photo-gallery.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Photo Gallery</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('video-gallery.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-video"></i>
                        <p>Video Gallery</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('sliders.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>Slider</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('clients.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-dungeon"></i>
                        <p>Client</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('news_events.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-stream"></i>
                        <p>News & Event</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('messages.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Message</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('map.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-map-marker-alt"></i>
                        <p>Map</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('company-profile.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-window-restore"></i>
                        <p>Company Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="nav-icon  fas fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
 </aside>
