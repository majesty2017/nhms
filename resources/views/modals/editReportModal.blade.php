<!-- Modal -->
<div class="modal fade" id="editReportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('reports.update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="update_report_id" id="update_report_id">

                    <div class="form-group">
                        <label for="update_doctor">Doctor</label>
                        <select class="form-control" name="doctor" id="update_doctor">
                            @foreach($doctors as $doctor)
                                @if($doctor->role_id == 2)
                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Report Type</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="update_type">
                        @error('type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="update_patient">Patient</label>
                        <select class="form-control" name="patient" id="update_patient">
                            @foreach($patients as $patient)
                                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="3"></textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
