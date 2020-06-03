<!-- Modal -->
<div class="modal fade" id="editRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('roles.update') }}">
                    @csrf
                    <input type="hidden" name="role_id" id="update_role_id">

                    <div class="form-group">
                        <label for="role_name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="update_role_name" placeholder="Role Name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-check">
                        <input type="hidden" name="status" value="0" id="update_role_status">
                        <input class="form-check-input" type="checkbox" name="status" value="1" id="update_role_status">
                        <label class="form-check-label" for="update_role_status">
                            Status
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="update_role_description">Description</label>
                        <textarea class="form-control" name="description" id="update_role_description" rows="3"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
