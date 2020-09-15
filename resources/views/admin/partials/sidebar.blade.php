<aside class="main-sidebar sidebar-dark-primary">
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="{{asset('adminhtml/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle"
             style="opacity: .8">
        <span class="brand-text">{{env('APP_NAME')}} Admin</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link {{active_menu('dashboard')}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dashboard</p>
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
                            <a href="{{route('admin.product.index')}}" class="nav-link {{active_menu('product*')}}">
                                <p>Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.category.index')}}" class="nav-link {{active_menu('category*')}}">
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
                            <a href="{{route('admin.order.index')}}" class="nav-link {{active_menu('order*')}}">

                                <p>Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.invoice.index')}}" class="nav-link {{active_menu('invoice*')}}">
                                <p>Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.shipment.index')}}" class="nav-link {{active_menu('shipment*')}}">
                                <p>Shipment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.refund.index')}}" class="nav-link {{active_menu('refund*')}}">
                                <p>Refund</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-burn"></i>
                        <p>
                            Marketing
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.cart-price-rule.index')}}" class="nav-link {{active_menu('cart-price-rule*')}}">

                                <p>Cart Price Rule</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.catalog-price-rule.index')}}" class="nav-link {{active_menu('catalog-price-rule*')}}">

                                <p>Catalog Price Rule</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.abandon-cart.index')}}" class="nav-link {{active_menu('abandon-cart*')}}">
                                <p>Abandon Cart</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.email-template.index')}}" class="nav-link {{active_menu('email-template*')}}">
                                <p>Email Template</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.subscribers.index')}}" class="nav-link {{active_menu('subscribers*')}}">
                                <p>Subscribers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.url-rewrite.index')}}" class="nav-link {{active_menu('url-rewrite*')}}">
                                <p>Url Rewrite</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.brand.index')}}" class="nav-link {{active_menu('brand*')}}">
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
                            <a href="{{route('admin.cms-page.index')}}" class="nav-link {{active_menu('cms-page*')}}">

                                <p>Cms Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.cms-block.index')}}" class="nav-link {{active_menu('cms-block*')}}">

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
                            <a href="{{route('admin.customer.index')}}" class="nav-link {{active_menu('customer.index')}}">
                                <p>Customer List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.customer.create')}}" class="nav-link {{active_menu('customer.create')}}">
                                <p>Add Customer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.group.index')}}" class="nav-link {{active_menu('group.index')}}">
                                <p>Customer Group</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.blog.index')}}" class="nav-link {{active_menu('blog*')}}">
                        <i class="nav-icon fas fa-book-reader"></i>
                        <p>
                            Blog
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="javascript:" class="nav-link">
                        <i class="nav-icon fas fa-user-check"></i>
                        <p>
                            Vendor
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.vendor.index')}}" class="nav-link {{active_menu('vendor')}}">
                                <p>Vendor List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.vendor-product.index')}}" class="nav-link {{active_menu('vendor-product*')}}">
                                <p>Vendor Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.vendor-order.index')}}" class="nav-link {{active_menu('vendor-order*')}}">
                                <p>Vendor Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.vendor-settlement.index')}}" class="nav-link {{active_menu('vendor-settlement*')}}">
                                <p>Vendor Settlement</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="javascript:" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            User Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.user.index')}}" class="nav-link {{request()->is('adminportal/user*')?'active':''}}">
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.role.index')}}" class="nav-link {{request()->is('adminportal/role*')?'active':''}}">
                                <p>Role</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.permission.index')}}" class="nav-link {{request()->is('adminportal/permission*')?'active':''}}">
                                <p>Permission</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="javascript:" class="nav-link">
                        <i class="nav-icon fas fa-download"></i>
                        <p>
                            Export Import
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.export.index')}}" class="nav-link {{request()->is('adminportal/export*')?'active':''}}">
                                <p>Export</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.import.index')}}" class="nav-link {{request()->is('adminportal/import*')?'active':''}}">
                                <p>Import</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.configuration.index')}}" class="nav-link {{active_menu('configuration*')}}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Configuration
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
