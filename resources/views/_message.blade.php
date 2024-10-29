@if (!empty(session('success')))
    <div class="alert alert-success" rle="alert">
        {{session('success')}}
    </div>
@endif
@if (!empty(session('error')))
    <div class="alert alert-danger" rle="alert">
        {{session('error')}}
    </div>
@endif