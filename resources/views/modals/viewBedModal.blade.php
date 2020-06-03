<!-- Modal -->
<div class="modal fade" id="viewBedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Bed Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="" id="bed_id">

                <div class="form-group">
                    <label for="">Bed Number</label>
                    <input type="text" name="" id="bed_number" readonly>
                </div>

                <div class="form-group">
                    <label for="">Bed Type</label>
                    <input type="text" name="" id="bed_type" readonly>
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="" id="bed_description" readonly>
                </div>

                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" name="" id="status" readonly>
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
