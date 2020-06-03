<!-- Modal -->
<div class="modal fade" id="editBedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Bed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('beds.update') }}">
                    @csrf
                    <input type="hidden" name="update_bed_id" id="update_bed_id">

                    <div class="form-group">
                        <label for="update_bed_number">Bed Number</label>
                        <input type="text" class="form-control @error('bed_number') is-invalid @enderror" name="bed_number" id="update_bed_number" value="{{ old('bed_number') }}">
                        @error('bed_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="update_bed_type">Bed Type</label>
                        <input type="text" class="form-control @error('bed_type') is-invalid @enderror" name="bed_type" id="update_bed_type" {{ old('bed_type') }}>
                        @error('bed_type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description" id="update_description" rows="3"></textarea>
                    </div>

                    <div class="form-check">
                        <input type="hidden" name="status" value="0" id="status">
                        <input class="form-check-input" type="checkbox" name="status" value="1" id="update_status" checked>
                        <label class="form-check-label" for="status">
                            Status
                        </label>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
