<!-- Modal -->
<div class="modal fade" id="createBedAllotmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Bed Allotment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('bed_allotments.create') }}">
                    @csrf
                    <div class="form-group">
                        <label for="">Bed</label>
                        <select class="form-control" name="bed">
                            @foreach($beds as $bed)
                                <option value="{{ $bed->id }}">{{ $bed->bed_type }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Patient</label>
                        <select class="form-control" name="patient">
                            @foreach($patients as $patient)
                                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Allotment Date</label>
                        <input type="date" class="form-control @error('allotment_date') is-invalid @enderror" name="allotment_date">
                        @error('allotment_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Discharge Date</label>
                        <input type="date" class="form-control @error('discharge_date') is-invalid @enderror" name="discharge_date">
                        @error('discharge_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-check">
                        <input type="hidden" name="status" value="0">
                        <input class="form-check-input" type="checkbox" name="status" value="1" checked>
                        <label class="form-check-label" for="">
                            Status
                        </label>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Create Bed Allotment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
