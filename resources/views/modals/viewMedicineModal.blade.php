<!-- Modal -->
<div class="modal fade" id="viewMedicineModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Medicine Category Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="" id="med_id">

                <div class="form-group">
                    <label for="">Medicine Name</label>
                    <input type="text" name="" id="med_name" readonly>
                </div>

                <div class="form-group">
                    <label for="">Category</label>
                    <input type="text" name="" id="med_category" readonly>
                </div>

                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" name="" id="med_price" readonly>
                </div>

                <div class="form-group">
                    <label for="">Manufacturing Company</label>
                    <input type="text" name="" id="med_manufacturer" readonly>
                </div>

                <div class="form-group">
                    <label for="">Quantity</label>
                    <input type="text" name="" id="med_quantity" readonly>
                </div>

                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" name="" id="med_status" readonly>
                </div>

{{--                <div class="form-group">--}}
{{--                    <label for="">Created At</label>--}}
{{--                    <input type="text" name="" id="created_at" readonly>--}}
{{--                </div>--}}

                <div class="form-group">
                    <label for="">Updated At</label>
                    <input type="text" name="" id="updated_at" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
