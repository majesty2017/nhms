<!-- Modal -->
<div class="modal fade" id="editMedicineCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Medicine Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('medicine-categories.update') }}">
                    @csrf
                    <input type="hidden" name="update_med_cat_id" id="update_med_cat_id">

                    <div class="form-group">
                        <label for="">Medicine Category</label>
                        <input type="text" class="form-control @error('med_cat') is-invalid @enderror" name="med_cat" id="update_med_cat">
                        @error('med_cat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description" id="update_description" rows="3"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
