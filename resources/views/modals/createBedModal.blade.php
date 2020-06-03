<!-- Modal -->
<div class="modal fade" id="createBedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Bed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('beds.create') }}">
                    @csrf
                    <div class="form-group">
                        <label for="">Bed Number</label>
                        <input type="text" class="form-control @error('bed_number') is-invalid @enderror" name="bed_number" id="" placeholder="Bed Number">
                        @error('bed_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Bed Type</label>
                        <input type="text" class="form-control @error('bed_type') is-invalid @enderror" name="bed_type" id="" placeholder="Bed Type">
                        @error('bed_type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-check">
                        <input type="hidden" name="status" value="0">
                        <input class="form-check-input" type="checkbox" name="status" value="1" id="">
                        <label class="form-check-label" for="">
                            Status
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description" id="" rows="3"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Create Bed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
