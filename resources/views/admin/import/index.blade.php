@extends('admin.layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="" class="btn btn-dark">
                        <i class="fas fa-upload"></i> Import Product
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0 bg-gradient-info d-flex p-0">
                            <h3 class="card-title p-3"><strong>Import Product CSV</strong></h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection