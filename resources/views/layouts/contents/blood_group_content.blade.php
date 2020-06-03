@include('modals.createBloodGroupModal')
@include('modals.viewBloodGroupModal')
@include('modals.editBloodGroupModal')
@include('modals.deleteBloodGroupModal')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Blood Groups</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Blood Group</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createBloodGroupModal">
                            <i class="fa fa-plus-circle"> Create Blood Group</i>
                        </button>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatables" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Blood Group</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bloodgroups as $bloodgroup)
                        <tr>
                            <td id="td">{{ $bloodgroup->id }}</td>
                            <td id="td">{{ $bloodgroup->blood_group }}</td>
                            @if($bloodgroup->status == 1)
                                <td id="td">Active</td>
                            @else
                                <td id="td">Inactive</td>
                            @endif
                            <td id="td">{{ $bloodgroup->created_at->diffForHumans() }}</td>
                            <td id="td">{{ $bloodgroup->updated_at->diffForHumans() }}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-xs viewBloodGroupModal"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-primary btn-xs editBloodGroupModal"><i class="fa fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-danger btn-xs deleteBloodGroupModal"><i class="fa fa-minus-circle"></i></button>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#ID</th>
                            <th>Blood Group</th>
                            <th>Status</th>
                            <th>Created At</th>
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
