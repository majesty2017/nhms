<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ URL::to('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">NHMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if($user->image)
                    <img src="{{ asset('uploads/users/' . $user->name . '/' . $user->image)}}" alt="User Avatar" class="img-circle elevation-2">
                @else
                    <img src="{{ URL::to('assets/avatar/avatar.png')}}" alt="User Avatar" class="img-circle elevation-2">
                @endif
            </div>
            <div class="info">
                <a href="{{ route('profile', [$user->id]) }}" class="d-block">{{ $user->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @if($user->role_id == 1)
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            General
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('users') }}" class="nav-link active">
                                <i class="far fa-user-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('roles') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('categories') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if($user->role_id == 1 || $user->role_id == 2 || $user->role_id ==3)
                <li class="nav-item">
                    <a href="{{ route('patients') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Patients
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('beds') }}" class="nav-link">
                        <i class="nav-icon fas fa-bed"></i>
                        <p>
                            Beds
                            <span class="right badge badge-danger">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('bed_allotments') }}" class="nav-link">
                        <i class="nav-icon fas fa-bed"></i>
                        <p>
                            Bed Allotments
                        </p>
                    </a>
                </li>
                @endif
                @if($user->role_id == 1 || $user->role_id == 2)
                <li class="nav-header">DOCTORS</li>
                <li class="nav-item">
                    <a href="{{ route('appointments') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Appointments
                            <span class="badge badge-info right">{{ $appointmentCount }}</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blood_groups') }}" class="nav-link">
                        <i class="nav-icon far fa-heart"></i>
                        <p>
                            Blood Groups
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blood-donors') }}" class="nav-link">
                        <i class="nav-icon fa fa-user-friends"></i>
                        <p>
                            Blood Donors
                        </p>
                    </a>
                </li>
                @endif
                @if($user->role_id == 1 || $user->role_id == 5)
                <li class="nav-header">ACCOUNTS</li>
                <li class="nav-item">
                    <a href="{{ route('payments') }}" class="nav-link">
                        <i class="nav-icon fas fa-money-bill"></i>
                        <p>
                            Payments
                        </p>
                    </a>
                </li>
                @endif
                @if($user->role_id == 1 || $user->role_id == 4)
                <li class="nav-header">Pharmacy</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Medicine
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('medicine-categories') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Medicine Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('medicines') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Medicines</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if($user->role_id == 1 || $user->role_id == 2 || $user->role_id == 5)
                <li class="nav-header">MISCELLANEOUS</li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Reports</p>
                    </a>
                </li>
                @endif
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('profile', [$user->id]) }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reset Password</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header"></li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
