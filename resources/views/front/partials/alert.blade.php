@if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
@elseif(session()->has('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
@elseif(session()->has('message'))
    <div class="alert alert-info">{{session('message')}}</div>
@endif
