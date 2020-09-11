<nav class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb mb-0 font-size-xs text-gray-400">
                    <li class="breadcrumb-item">
                        <a class="text-gray-400" href="{{route('welcome')}}">{{__('Home')}}</a>
                    </li>
                    {{$slot}}
                    <li class="breadcrumb-item active">
                        {{$active}}
                    </li>
                </ol>

            </div>
        </div>
    </div>
</nav>
