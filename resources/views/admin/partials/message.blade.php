<div class="row">
    <div class="col-12">
        @if(Session::has('success'))
            <div class="content">
                <div class="container-fluid">
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                </div>
            </div>
        @elseif(Session::has('error'))
            <div class="content">
                <div class="container-fluid">
                    <div class="alert alert-danger">{{Session::get('error')}}</div>
                </div>
            </div>
        @elseif(Session::has('message'))
            <div class="content">
                <div class="container-fluid">
                    <div class="alert alert-info">{{Session::get('message')}}</div>
                </div>
            </div>
        @endif
    </div>
</div>
