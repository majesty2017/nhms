<!-- Modal -->
<div class="modal fade" id="viewPaymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Payment Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="" id="payment_id">

                <div class="form-group">
                    <label for="">Patient</label>
                    <input type="text" name="" id="patient_id" readonly>
                </div>

                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="" id="title" readonly>
                </div>

                <div class="form-group">
                    <label for="">Transaction Id</label>
                    <input type="text" name="" id="trans_id" readonly>
                </div>

                <div class="form-group">
                    <label for="">Method</label>
                    <input type="text" name="" id="method" readonly>
                </div>

                <div class="form-group">
                    <label for="">Amount</label>
                    <input type="text" name="" id="amount" readonly>
                </div>

                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" name="" id="payment_status" readonly>
                </div>

                <div class="form-group">
                    <label for="">Updated At</label>
                    <input type="text" name="" id="updated_at" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
