<!-- Modal -->
<div class="modal fade" id="createPrescriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Prescription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('prescriptions.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Doctor</label>
                        <select class="form-control" name="doctor">
                            @foreach($doctors as $doctor)
                                @if($doctor->role_id == 2)
                            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                @endif
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
                        <label for="">Case History</label>
                        <input type="text" class="form-control @error('history') is-invalid @enderror" name="history" placeholder="Case History" value="{{ old('history') }}">
                        @error('history')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Medication</label>
                        <input type="text" class="form-control @error('medication') is-invalid @enderror" name="medication" placeholder="Medication" value="{{ old('medication') }}">
                        @error('medication')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Medication From Pharmacist</label>
                        <input type="text" class="form-control @error('medication_from_pharmacist') is-invalid @enderror" name="medication_from_pharmacist" placeholder="Medication From Pharmacist" value="{{ old('medication_from_pharmacist') }}">
                        @error('medication_from_pharmacist')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" cols="3"></textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Create Prescription</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
