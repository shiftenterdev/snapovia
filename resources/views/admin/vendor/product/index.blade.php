@extends('admin.layouts.app')

@section('content')
    <x-admin-header title="Vendor Products">
        <a href="{{route('admin.vendor.create')}}" class="btn btn-dark">
            <i class="fas fa-plus"></i> New Vendor
        </a>
    </x-admin-header>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
