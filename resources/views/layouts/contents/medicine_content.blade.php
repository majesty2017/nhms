@include('modals.createMedicineModal')
@include('modals.viewMedicineModal')
@include('modals.editMedicineModal')
@include('modals.deleteMedicineModal')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Medicines</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Medicines DataTable</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createMedicineModal">
                            <i class="fa fa-plus-circle"> Create Medicine</i>
                        </button>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatables" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Company</th>
                            <th>Quantity</th>
                            <th>Status</th>
{{--                            <th>Created At</th>--}}
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($medicines as $medicine)
                            <tr>
                                <td id="td">{{ $medicine->id }}</td>
                                <td id="td">{{ $medicine->name }}</td>
                                <td id="td">{{ $medicine->medicineCategory->name}}</td>
                                <td id="td">{{ $medicine->price }}</td>
                                <td id="td">{{ $medicine->manufacturing_company }}</td>
                                <td id="td">{{ $medicine->quantity }}</td>
                                @if($medicine->status == 1)
                                    <td id="td">Active</td>
                                @else
                                    <td id="td">Inactive</td>
                                @endif
{{--                                <td id="td">{{ $medicine->created_at->diffForHumans() }}</td>--}}
                                <td id="td">{{ $medicine->updated_at->diffForHumans() }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-xs viewMedicineModal"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-primary btn-xs editMedicineModal"><i class="fa fa-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-danger btn-xs deleteMedicineModal"><i class="fa fa-minus-circle"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Manufacturer</th>
                            <th>Quantity</th>
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
