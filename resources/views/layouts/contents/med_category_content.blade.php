@include('modals.createMedicineCategoryModal')
@include('modals.viewMedicineCategoryModal')
@include('modals.editMedicineCategoryModal')
@include('modals.deleteMedicineCategoryModal')
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createMedicineCategoryModal">
                            <i class="fa fa-plus-circle"> Create Medicine Category</i>
                        </button>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatables" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Medicine Category</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($med_categories as $med_category)
                        <tr>
                            <td id="td">{{ $med_category->id }}</td>
                            <td id="td">{{ $med_category->name }}</td>
                            <td id="td">{{ $med_category->description }}</td>
                            <td id="td">{{ $med_category->created_at->diffForHumans() }}</td>
                            <td id="td">{{ $med_category->updated_at->diffForHumans() }}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-xs viewMedicineCategoryModal"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-primary btn-xs editMedicineCategoryModal"><i class="fa fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-danger btn-xs deleteMedicineCategoryModal"><i class="fa fa-minus-circle"></i></button>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#ID</th>
                            <th>Medicine Category</th>
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
