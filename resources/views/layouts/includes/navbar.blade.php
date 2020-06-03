<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('logout') }}" class="nav-link">Logout</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user-circle"></i>
                <span class="badge badge-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="{{ route('profile', [$user->id]) }}" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        @if($user->image)
                        <img src="{{ asset('uploads/users/' . $user->name . '/' . $user->image)}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        @else
                            <img src="{{ URL::to('assets/avatar/avatar.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        @endif
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                {{ $user->name }}
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> A member since {{ $user->created_at->format('M Y') }}</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
    </ul>
</nav>
