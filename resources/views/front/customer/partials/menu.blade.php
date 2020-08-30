<nav class="mb-10 mb-md-0">
    <div class="list-group list-group-sm list-group-strong list-group-flush-x">
        <a class="list-group-item list-group-item-action dropright-toggle {{request()->is('customer/dashboard')?'active':''}}" href="{{route('customer.dashboard')}}">
            {{__('Dashboard')}}
        </a>
        <a class="list-group-item list-group-item-action dropright-toggle {{request()->is('customer/info')?'active':''}}" href="{{route('customer.info')}}">
            {{__('Personal Info')}}
        </a>
        <a class="list-group-item list-group-item-action dropright-toggle {{request()->is('customer/order')?'active':''}}" href="{{route('customer.order')}}">
            {{__('Orders')}}
        </a>
        <a class="list-group-item list-group-item-action dropright-toggle {{request()->is('customer/wishlist')?'active':''}}" href="{{route('customer.wishlist')}}">
            {{__('Wishlist')}}
        </a>
        <a class="list-group-item list-group-item-action dropright-toggle {{request()->is('customer/review')?'active':''}}" href="{{route('customer.review')}}">
            {{__('Review')}}
        </a>
        <a class="list-group-item list-group-item-action dropright-toggle" href="{{route('customer.logout')}}">
            {{__('Logout')}}
        </a>

    </div>
</nav>
