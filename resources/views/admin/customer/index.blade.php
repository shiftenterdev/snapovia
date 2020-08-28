@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{route('admin.customer.create')}}" class="btn btn-dark">
                        <i class="fas fa-plus"></i> New Customer
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

                        <div class="card-body">
                            <form action="" method="get" autocomplete="off">
                                <div class="row">

                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Firstname</label>
                                            <input type="text" name="first_name"
                                                   class="form-control form-control-sm"
                                                   value="{{request('first_name')}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Lastname</label>
                                            <input type="text" name="last_name"
                                                   class="form-control form-control-sm"
                                                   value="{{request('last_name')}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" name="email"
                                                   class="form-control form-control-sm" value="{{request('email')}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="reset" class="btn btn-warning btn-sm">Reset</button>
                                            <button type="submit" class="btn btn-info btn-sm"><i
                                                    class="fas fa-filter"></i> Filter
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header border-0 bg-gradient-info d-flex p-0">
                            <h3 class="card-title p-3"><strong>Customers</strong></h3>
                            <small class="p-3">Showing {{($customers->currentpage()-1)*$customers->perpage()+1}}
                                to {{$customers->currentpage()*$customers->perpage()}}
                                of {{$customers->total()}} entries
                            </small>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Email Verified</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $key => $c)
                                    <tr>
                                        <td>{{$c->id}}</td>
                                        <td>{{$c->first_name}}</td>
                                        <td>{{$c->last_name}}</td>
                                        <td>{{$c->gender}}</td>
                                        <td>{{$c->email}}</td>
                                        <td>{{$c->email_verified_at}}</td>
                                        <td>{{$c->country}}</td>
                                        <td>
                                            <a href="{{route('admin.customer.edit',$c->id)}}" class="text-muted">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{route('admin.customer.destroy',$c->id)}}" class="text-muted">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix flex">
                            {{$customers->appends(request()->query())->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
