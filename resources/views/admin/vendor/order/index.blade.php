@extends('admin.layouts.app')

@section('content')
    <x-admin-header title="Vendor Orders">
        <a href="{{route('admin.vendor.create')}}" class="btn btn-dark">
            <i class="fas fa-plus"></i> New Order
        </a>
    </x-admin-header>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0 radius-top">
                            <table class="table table-striped table-valign-middle">
                                <thead class="bg-gray-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Due</th>
                                    <th>Sattlement</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
