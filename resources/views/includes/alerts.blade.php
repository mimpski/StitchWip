<div class="container">
    <div class="row">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block col-sm-12">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    </div>
</div>
