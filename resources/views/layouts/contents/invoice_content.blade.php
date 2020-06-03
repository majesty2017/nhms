@include('modals.createInvoiceModal')
@include('modals.viewInvoiceModal')
@include('modals.editInvoiceModal')
@include('modals.deleteInvoiceModal')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Invoices</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Invoices DataTable</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createInvoiceModal">
                            <i class="fa fa-plus-circle"> Add New Invoice</i>
                        </button>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table id="datatables" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Patient</th>
                            <th>Invoice Type</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($invoices as $invoice)
                            <tr>
                                <td id="td">{{ $invoice->id }}</td>
                                <td id="td">{{ $invoice->patient->name}}</td>
                                <td id="td">{{ $invoice->type }}</td>
                                <td id="td">{{ $invoice->description }}</td>
                                <td id="td">{{ $invoice->amount }}</td>
                                @if($invoice->status == 1)
                                <td id="td">Paid</td>
                                @else
                                <td id="td">Unpaid</td>
                                @endif
                                <td id="td">{{ $invoice->created_at->diffForHumans() }}</td>
                                <td id="td">{{ $invoice->updated_at->diffForHumans() }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-xs viewInvoiceModal"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-primary btn-xs editInvoiceModal"><i class="fa fa-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-danger btn-xs deleteInvoiceModal"><i class="fa fa-minus-circle"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#ID</th>
                            <th>Patient</th>
                            <th>Invoice Type</th>
                            <th>Description</th>
                            <th>Amount</th>
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
