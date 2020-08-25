@extends('admin.layouts.app')

@section('title','Configuration')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{route('admin.cms-block.create')}}" class="btn btn-dark">
                        <i class="fas fa-save"></i> Save onfiguration
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header p-0 bg-gradient-info d-flex">
                            <h3 class="card-title p-3"><strong>Basic</strong></h3>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="form-group">
                                <label for="">Shop Title</label>
                                <input type="text" name="shop_title" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="">Shop Address</label>
                                <input type="text" name="shop_address" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="">City</label>
                                <input type="text" name="shop_title" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="">Country</label>
                                <input type="text" name="shop_country" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="shop_contact" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="">VAT ID</label>
                                <input type="text" name="vat_id" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header p-0 bg-gradient-info d-flex">
                            <h3 class="card-title p-3"><strong>Catalog</strong></h3>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="form-group">
                                <label for="">Manage Inventory</label>
                                <input type="text" name="manage_inventory" class="form-control form-control-sm" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header p-0 bg-gradient-info d-flex">
                            <h3 class="card-title p-3"><strong>Sales</strong></h3>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="form-group">
                                <label for="">Order Prefix</label>
                                <input type="text" name="order_id_prefix" class="form-control form-control-sm" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header p-0 bg-gradient-info d-flex">
                            <h3 class="card-title p-3"><strong>Customer</strong></h3>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="form-group">
                                <label for="">Customer Name Prefix</label>
                                <input type="text" name="customer_name_prefix" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="">Delete Customer</label>
                                <input type="text" name="delete_customers" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="">Customer Address Line</label>
                                <input type="text" name="customer_address_line" class="form-control form-control-sm" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection