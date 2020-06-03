<!-- Modal -->
<div class="modal fade" id="viewUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View User Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="" id="user_id">

                <div class="form-group">
                    <label for="">User</label>
                    <input type="text" name="" id="user_name" readonly>
                </div>

                <div class="form-group">
                    <label for="">Role</label>
                    <input type="text" name="" id="user_role" readonly>
                </div>

                <div class="form-group">
                    <label for="">Department</label>
                    <input type="text" name="" id="user_department" readonly>
                </div>

                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="" id="user_phone" readonly>
                </div>

                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" name="" id="status" readonly>
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
