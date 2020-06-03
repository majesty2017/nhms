@include('modals.createReportModal')
@include('modals.viewReportModal')
@include('modals.editReportModal')
@include('modals.deleteReportModal')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Reports</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Reports DataTable</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createReportModal">
                            <i class="fa fa-plus-circle"> Add New Report</i>
                        </button>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatables" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Doctor</th>
                            <th>Report Type</th>
                            <th>Patient</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reports as $report)
                            <tr>
                                <td id="td">{{ $report->id }}</td>
                                <td id="td">{{ $report->doctor->name }}</td>
                                <td id="td">{{ $report->type }}</td>
                                <td id="td">{{ $report->patient->name}}</td>
                                <td id="td">{{ $report->description }}</td>
                                <td id="td">{{ $report->created_at->diffForHumans() }}</td>
                                <td id="td">{{ $report->updated_at->diffForHumans() }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-xs viewReportModal"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-primary btn-xs editReportModal"><i class="fa fa-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-danger btn-xs deleteReportModal"><i class="fa fa-minus-circle"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#ID</th>
                            <th>Doctor</th>
                            <th>Report Type</th>
                            <th>Patient</th>
                            <th>Description</th>
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
