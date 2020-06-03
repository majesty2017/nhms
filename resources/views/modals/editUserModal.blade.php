<!-- Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('users.update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="update_user_id" id="update_user_id">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="update_name" placeholder="Name" value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Role</label>
                        <select class="form-control" name="role" id="update_role">
                            @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Category</label>
                        <select class="form-control" name="category" id="update_category">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="update_phone" placeholder="Phone Number" value="{{ old('phone') }}">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Upload Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" id="update_image">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-check">
                        <input type="hidden" name="status" value="0" id="user_status">
                        <input class="form-check-input" type="checkbox" name="status" value="1" id="update_user_status">
                        <label class="form-check-label" for="">
                            Status
                        </label>
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label for="">Password</label>--}}
{{--                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">--}}
{{--                        @error('password')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
