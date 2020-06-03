@include('modals.createBedAllotmentModal')
@include('modals.viewBedAllotmentModal')
@include('modals.editBedAllotmentModal')
@include('modals.deleteBedAllotmentModal')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Bed Allotments</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Bed Allotments DataTable</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createBedAllotmentModal">
                            <i class="fa fa-plus-circle"> Create Bed Allotment</i>
                        </button>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatables" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Bed</th>
                            <th>Patient</th>
                            <th>Allotment Date</th>
                            <th>Discharge Date</th>
                            <th>Status</th>
{{--                            <th>Created At</th>--}}
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allotments as $allotment)
                        <tr>
                            <td id="td">{{ $allotment->id }}</td>
                            <td id="td">{{ $allotment->bed->bed_type }}</td>
                            <td id="td">{{ $allotment->patient->name }}</td>
                            <td id="td">{{ $allotment->allotment_date }}</td>
                            <td id="td">{{ $allotment->discharge_date }}</td>
                            @if($allotment->status == 1)
                                <td id="td">Active</td>
                            @else
                                <td id="td">Inactive</td>
                            @endif
{{--                            <td id="td">{{ $allotment->created_at->diffForHumans() }}</td>--}}
                            <td id="td">{{ $allotment->updated_at->diffForHumans() }}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-xs viewBedAllotmentModal"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-primary btn-xs editBedAllotmentModal"><i class="fa fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-danger btn-xs deleteBedAllotmentModal"><i class="fa fa-minus-circle"></i></button>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#ID</th>
                            <th>Bed</th>
                            <th>Patient</th>
                            <th>Allotment Date</th>
                            <th>Discharge Date</th>
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
