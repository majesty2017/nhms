@if(Session::has('info'))
    <div class="alert alert-info alert-dismissible fade show col-sm-6 offset-3" role="alert">
        {{ Session::get('info') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif(Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show col-sm-6 offset-3" role="alert">
        {{ Session::get('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
