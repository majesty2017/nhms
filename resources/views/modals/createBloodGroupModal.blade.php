<!-- Modal -->
<div class="modal fade" id="createBloodGroupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Blood Group</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('blood_groups.create') }}">
                    @csrf
                    <div class="form-group">
                        <label for="">Blood Group</label>
                        <input type="text" class="form-control @error('blood_group') is-invalid @enderror" name="blood_group" placeholder="Blood Group">
                        @error('blood_group')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-check">
                        <input type="hidden" name="status" value="0">
                        <input class="form-check-input" type="checkbox" name="status" value="1" id="defaultCheck1" checked>
                        <label class="form-check-label" for="defaultCheck1">
                            Status
                        </label>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Create Blood Group</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
