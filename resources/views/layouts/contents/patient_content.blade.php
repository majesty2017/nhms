@include('modals.createPatientModal')
@include('modals.viewPatientModal')
@include('modals.editPatientModal')
@include('modals.deletePatientModal')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Patients</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Patients DataTable</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createPatientModal">
                            <i class="fa fa-plus-circle"> Add New Patient</i>
                        </button>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatables" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>#Patient ID</th>
                            <th>Name</th>
                            <th>Home Town</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Marital Status</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patients as $patient)
                            <tr>
                                <td id="td">{{ $patient->id }}</td>
                                <td id="td">{{ $patient->patient_id }}</td>
                                <td id="td">{{ $patient->name }}</td>
                                <td id="td">{{ $patient->home_town }}</td>
                                <td id="td">{{ $patient->phone }}</td>
                                <td id="td">{{ $patient->gender }}</td>
                                <td id="td">{{ $patient->marital_status }}</td>
                                <td id="td">{{ $patient->updated_at->diffForHumans() }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-xs viewPatientModal"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-primary btn-xs editPatientModal"><i class="fa fa-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-danger btn-xs deletePatientModal"><i class="fa fa-minus-circle"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#ID</th>
                            <th>#Patient ID</th>
                            <th>Name</th>
                            <th>Home Town</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Marital Status</th>
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
