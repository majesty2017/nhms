<!-- Modal -->
<div class="modal fade" id="editMedicineModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Medicine</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('medicines.update') }}">
                    @csrf
                    <input type="hidden" name="update_med_id" id="update_med_id">

                    <div class="form-group">
                        <label for="">Medicine Name</label>
                        <input type="text" class="form-control @error('med_name') is-invalid @enderror" name="med_name" id="update_med_name" placeholder="Medicine Name">
                        @error('med_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Medicine Category</label>
                        <select class="form-control" name="med_category">
                            @foreach($med_cats as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="update_price">
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Manufacturing Company</label>
                        <input type="text" class="form-control @error('manufacturer') is-invalid @enderror" name="manufacturer" id="update_manufacturer">
                        @error('manufacturer')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Quantity</label>
                        <input type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" id="update_quantity">
                        @error('quantity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-check">
                        <input type="hidden" name="status" value="0" id="status">
                        <input class="form-check-input" type="checkbox" name="status" value="1" id="update_status" checked>
                        <label class="form-check-label" for="">
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
