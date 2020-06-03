<!-- Modal -->
<div class="modal fade" id="viewInvoiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Invoice Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="" id="invoice_id">

                <div class="form-group">
                    <label for="">Patient</label>
                    <input type="text" name="" id="invoice_patient" readonly>
                </div>

                <div class="form-group">
                    <label for="">invoice Type</label>
                    <input type="text" name="" id="invoice_type" readonly>
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="" id="invoice_description" readonly>
                </div>

                <div class="form-group">
                    <label for="">Amount</label>
                    <input type="text" name="" id="invoice_amount" readonly>
                </div>

                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" name="" id="invoice_status" readonly>
                </div>

                <div class="form-group">
                    <label for="">Created At</label>
                    <input type="text" name="" id="created_at" readonly>
                </div>

                <div class="form-group">
                    <label for="">Updated At</label>
                    <input type="text" name="" id="updated_at" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
