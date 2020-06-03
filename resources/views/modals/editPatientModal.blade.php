<!-- Modal -->
<div class="modal fade" id="editPatientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Patient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('patients.update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="update_id" id="update_patient_id">
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Home Town</label>
                                <input type="text" class="form-control @error('home_town') is-invalid @enderror" name="home_town" id="home_town" value="{{ old('home_town') }}">
                                @error('home_town')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>

{{--                            <div class="form-group">--}}
{{--                                <label for="">Email</label>--}}
{{--                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">--}}
{{--                                @error('email')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                            </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone') }}">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>

{{--                            <div class="form-group">--}}
{{--                                <label for="">Alternative Phone</label>--}}
{{--                                <input type="text" class="form-control @error('alternative_phone') is-invalid @enderror" name="alternative_phone" id="alternative_phone" value="{{ old('alternative_phone') }}">--}}
{{--                                @error('alternative_phone')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                    <strong>{{ $message }}</strong>--}}
{{--                                </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

                            <div class="form-group">
                                <label for="">Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

{{--                            <div class="form-group">--}}
{{--                                <label for="">Nationality</label>--}}
{{--                                <input type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" id="nationality" value="{{ old('nationality') }}">--}}
{{--                                @error('nationality')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
{{--                        </div>--}}
{{--                        <div class="col-md-6">--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="">Occupation</label>--}}
{{--                                <input type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" id="occupation" value="{{ old('occupation') }}">--}}
{{--                                @error('occupation')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                    <strong>{{ $message }}</strong>--}}
{{--                                </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="">Marital Status</label>--}}
{{--                                <select class="form-control" name="marital_status">--}}
{{--                                    <option value="Single">Single</option>--}}
{{--                                    <option value="Married">Married</option>--}}
{{--                                    <option value="Divorced">Divorced</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="">Current Address</label>--}}
{{--                                <textarea class="form-control @error('current_address') is-invalid @enderror" name="current_address" id="current_address"></textarea>--}}
{{--                                @error('current_address')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="">House Number</label>--}}
{{--                                <input type="text" class="form-control @error('house_number') is-invalid @enderror" name="house_number" id="house_number" value="{{ old('house_number') }}">--}}
{{--                                @error('house_number')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="">Digital Address</label>--}}
{{--                                <input type="text" class="form-control @error('digital_address') is-invalid @enderror" name="digital_address" id="digital_address" value="{{ old('digital_address') }}">--}}
{{--                                @error('digital_address')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="">Birth Date</label>--}}
{{--                                <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" id="">--}}
{{--                                @error('dob')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}


{{--                        </div>--}}
{{--                    </div>--}}
                </form>
            </div>
        </div>
    </div>
</div>
