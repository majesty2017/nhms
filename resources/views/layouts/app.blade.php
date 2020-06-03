@include('layouts.includes.header')
<div class="wrapper">

    <!-- Navbar -->
        @include('layouts.includes.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layouts.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('layouts.partials.alert')
        @yield('content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@include('layouts.includes.footer')
