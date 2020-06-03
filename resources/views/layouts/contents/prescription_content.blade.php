@include('modals.createPrescriptionModal')
@include('modals.viewPrescriptionModal')
@include('modals.editPrescriptionModal')
@include('modals.deletePrescriptionModal')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Prescriptions</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Prescriptions DataTable</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createPrescriptionModal">
                            <i class="fa fa-plus-circle"> Add New Prescription</i>
                        </button>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatables" class="table table-bordered table-striped table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Doctor</th>
                            <th>Patient</th>
                            <th>History</th>
                            <th>Medication</th>
                            <th>Pharmacist Medication</th>
                            <th>Description</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($prescriptions as $prescription)
                            <tr>
                                <td id="td">{{ $prescription->id }}</td>
                                <td id="td">{{ $prescription->doctor->name }}</td>
                                <td id="td">{{ $prescription->patient->name}}</td>
                                <td id="td">{{ $prescription->case_history }}</td>
                                <td id="td">{{ $prescription->medication }}</td>
                                <td id="td">{{ $prescription->medication_from_pharmacist }}</td>
                                <td id="td">{{ $prescription->description }}</td>
                                <td id="td">{{ $prescription->updated_at->diffForHumans() }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-xs viewPrescriptionModal"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-primary btn-xs editPrescriptionModal"><i class="fa fa-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-danger btn-xs deletePrescriptionModal"><i class="fa fa-minus-circle"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#ID</th>
                            <th>Doctor</th>
                            <th>Patient</th>
                            <th>History</th>
                            <th>Medication</th>
                            <th>Pharmacist Medication</th>
                            <th>Description</th>
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
