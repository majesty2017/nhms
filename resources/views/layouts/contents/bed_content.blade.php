@include('modals.createBedModal')
@include('modals.viewBedModal')
@include('modals.editBedModal')
@include('modals.deleteBedModal')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Beds</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Beds DataTable</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createBedModal">
                            <i class="fa fa-plus-circle"> Add New Bed</i>
                        </button>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatables" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Bed Number</th>
                            <th>Bed Type</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($beds as $bed)
                        <tr>
                            <td id="td">{{ $bed->id }}</td>
                            <td id="td">{{ $bed->bed_number }}</td>
                            <td id="td">{{ $bed->bed_type }}</td>
                            <td id="td">{{ $bed->description }}</td>
                            @if($bed->status == 1)
                                <td id="td">Active</td>
                            @else
                                <td id="td">Inactive</td>
                            @endif
                            <td id="td">{{ $bed->created_at->diffForHumans() }}</td>
                            <td id="td">{{ $bed->updated_at->diffForHumans() }}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-xs viewBedModal"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-primary btn-xs editBedModal"><i class="fa fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-danger btn-xs deleteBedModal"><i class="fa fa-minus-circle"></i></button>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#ID</th>
                            <th>Bed Number</th>
                            <th>Bed Type</th>
                            <th>Description</th>
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
