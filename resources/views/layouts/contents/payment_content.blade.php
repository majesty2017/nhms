@include('modals.createPaymentModal')
@include('modals.viewPaymentModal')
@include('modals.editPaymentModal')
@include('modals.deletePaymentModal')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Payments</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Payments DataTable</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createPaymentModal">
                            <i class="fa fa-plus-circle"> Create Payment</i>
                        </button>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table id="datatables" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Patient Name</th>
                            <th>Title</th>
                            <th>Trans Id</th>
                            <th>Method</th>
                            <th>Amount</th>
{{--                            <th>Description</th>--}}
                            <th>Status</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($payments as $payment)
                            <tr>
                                <td id="td">{{ $payment->id }}</td>
                                <td id="td">{{ $payment->patient->name }}</td>
                                <td id="td">{{ $payment->title}}</td>
                                <td id="td">{{ $payment->transaction_id}}</td>
                                <td id="td">{{ $payment->method}}</td>
                                <td id="td">{{ $payment->amount }}</td>
{{--                                <td id="td">{{ $payment->description }}</td>--}}
                                @if($payment->status == 1)
                                    <td id="td">Paid</td>
                                @else
                                    <td id="td">Unpaid</td>
                                @endif
                                <td id="td">{{ $payment->updated_at->diffForHumans() }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-xs viewPaymentModal"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-primary btn-xs editPaymentModal"><i class="fa fa-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-danger btn-xs deletePaymentModal"><i class="fa fa-minus-circle"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#ID</th>
                            <th>Patient Name</th>
                            <th>Title</th>
                            <th>Trans Id</th>
                            <th>Method</th>
                            <th>Amount</th>
{{--                            <th>Description</th>--}}
                            <th>Status</th>
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
