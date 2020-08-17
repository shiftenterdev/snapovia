<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{env('APP_NAME')}} Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link {{request()->is('admin')?'active':''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            Catalog
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.product')}}" class="nav-link {{request()->is('admin/product*')?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.category')}}" class="nav-link {{request()->is('admin/category*')?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-money-bill"></i>
                        <p>
                            Sales
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.order')}}" class="nav-link {{request()->is('admin/order*')?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.invoice')}}" class="nav-link {{request()->is('admin/invoice*')?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.refund')}}" class="nav-link {{request()->is('admin/refund*')?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Refund</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.brand')}}" class="nav-link {{request()->is('admin/brand*')?'active':''}}">
                        <i class="nav-icon fas fa-bookmark"></i>
                        <p>
                            Brand
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-pager"></i>
                        <p>
                            Content
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.cms-page')}}" class="nav-link {{request()->is('admin/cms-page*')?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cms Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.cms-block')}}" class="nav-link {{request()->is('admin/cms-block*')?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cms Block</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="javascript:" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Customers
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.customer')}}" class="nav-link {{request()->is('admin/customer')?'active':''}}">
                                <i class="far fa-user nav-icon"></i>
                                <p>Customer List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vendor List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.customer.create')}}" class="nav-link {{request()->is('admin/customer/create')?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Customer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.customer.group')}}" class="nav-link {{request()->is('admin/customer/group')?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Customer Group</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.configuration')}}" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Configuration
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
