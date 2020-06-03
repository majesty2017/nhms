<!-- Modal -->
<div class="modal fade" id="editBedAllotmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Bed Allotment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('bed_allotments.update') }}">
                    @csrf
                    <input type="hidden" name="update_bed_allotment_id" id="update_bed_allotment_id">

                    <div class="form-group">
                        <label for="">Bed</label>
                        <select class="form-control @error('bed') is-invalid @enderror" name="bed" id="update_allotment_bed">
                            @foreach($beds as $bed)
                                <option value="{{ $bed->id }}">{{ $bed->bed_type }}</option>
                            @endforeach
                        </select>
                        @error('bed')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Patient</label>
                        <select class="form-control @error('patient') is-invalid @enderror" name="patient" id="update_allotment_patient">
                            @foreach($patients as $patient)
                                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                            @endforeach
                        </select>
                        @error('patient')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Allotment Date</label>
                        <input type="date" class="form-control @error('allotment_date') is-invalid @enderror" name="allotment_date" id="update_allotment_date">
                        @error('allotment_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Discharge Date</label>
                        <input type="date" class="form-control @error('discharge_date') is-invalid @enderror" name="discharge_date" id="update_discharge_date">
                        @error('discharge_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-check">
                        <input type="hidden" name="status" value="0">
                        <input class="form-check-input" type="checkbox" name="status" value="1" checked>
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
