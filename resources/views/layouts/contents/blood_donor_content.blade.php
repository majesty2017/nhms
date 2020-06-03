@include('modals.createBloodDonorModal')
@include('modals.viewBloodDonorModal')
@include('modals.editBloodDonorModal')
@include('modals.deleteBloodDonorModal')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Blood Donors</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Blood Donors DataTable</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createBloodDonorModal">
                            <i class="fa fa-plus-circle"> Create Blood Donor</i>
                        </button>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatables" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Group</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Phone</th>
{{--                            <th>Email</th>--}}
{{--                            <th>Address</th>--}}
                            <th>Status</th>
                            {{--                            <th>Created At</th>--}}
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blood_donors as $donor)
                            <tr>
                                <td id="td">{{ $donor->id }}</td>
                                <td id="td">{{ $donor->name }}</td>
                                <td id="td">{{ $donor->bloodGroup->blood_group }}</td>
                                <td id="td">{{ $donor->gender }}</td>
                                <td id="td">{{ $donor->age }}</td>
                                <td id="td">{{ $donor->phone }}</td>
{{--                                <td id="td">{{ $donor->email }}</td>--}}
{{--                                <td id="td">{{ $donor->address }}</td>--}}
                                @if($donor->status == 1)
                                    <td id="td">Active</td>
                                @else
                                    <td id="td">Inactive</td>
                                @endif
                                {{--                            <td id="td">{{ $user->created_at->diffForHumans() }}</td>--}}
                                <td id="td">{{ $donor->updated_at->diffForHumans() }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-xs viewBloodDonorModal"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-primary btn-xs editBloodDonorModal"><i class="fa fa-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-danger btn-xs deleteBloodDonorModal"><i class="fa fa-minus-circle"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Group</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Phone</th>
{{--                            <th>Email</th>--}}
{{--                            <th>Address</th>--}}
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
