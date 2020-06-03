<!-- Modal -->
<div class="modal fade" id="editPrescriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Prescription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('prescriptions.update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="update_prescription_id" id="update_prescription_id">

                    <div class="form-group">
                        <label for="update_doctor">Doctor</label>
                        <select class="form-control" name="doctor">
                            @foreach($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="update_patient">Patient</label>
                        <select class="form-control" name="patient">
                            @foreach($patients as $patient)
                                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Case History</label>
                        <input type="text" class="form-control @error('history') is-invalid @enderror" name="history" id="update_history" value="{{ old('history') }}">
                        @error('history')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Medication</label>
                        <input type="text" class="form-control @error('medication') is-invalid @enderror" name="medication" id="update_medication" value="{{ old('medication') }}">
                        @error('medication')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Medication From Pharmacist</label>
                        <input type="text" class="form-control @error('medication_from_pharmacist') is-invalid @enderror" name="medication_from_pharmacist" id="update_medication_from_pharmacist" value="{{ old('medication_from_pharmacist') }}">
                        @error('medication_from_pharmacist')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="update_description" cols="3"></textarea>
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
