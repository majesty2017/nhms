@include('modals.createUserModal')
@include('modals.viewUserModal')
@include('modals.editUserModal')
@include('modals.deleteUserModal')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Users</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Users DataTable</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createUserModal">
                            <i class="fa fa-plus-circle"> Add New User</i>
                        </button>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatables" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Department</th>
                            <th>Phone</th>
                            <th>Status</th>
                            {{--                            <th>Created At</th>--}}
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="td" id="td">{{ $user->id }}</td>
                                <td id="td">
                                    @if($user->image)
                                        <img src="{{ asset('uploads/users/' . $user->name . '/' . $user->image) }}" style="width: 50px; height: 50px;">
                                    @else
                                        <img src="{{ asset('uploads/users/avatar.png') }}" style="width: 50px; height: 50px;">
                                    @endif
                                </td>
                                <td class="td" id="td">{{ $user->name }}</td>
                                <td class="td" id="td">{{ $user->role->name }}</td>
                                <td class="td" id="td">{{ $user->category->name }}</td>
                                <td class="td" id="td">{{ $user->phone }}</td>
                                @if($user->status == 1)
                                    <td class="td" id="td">Active</td>
                                @else
                                    <td class="td" id="td">Inactive</td>
                                @endif
                                {{--                            <td id="td">{{ $user->created_at->diffForHumans() }}</td>--}}
                                <td id="td">{{ $user->updated_at->diffForHumans() }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-xs viewUserModal"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-primary btn-xs editUserModal"><i class="fa fa-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-danger btn-xs deleteUserModal"><i class="fa fa-minus-circle"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Department</th>
                            <th>Phone</th>
                            <th>Status</th>
                            {{--                            <th>Created At</th>--}}
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
