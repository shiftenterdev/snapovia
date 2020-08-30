<div>
    <!-- Search -->
    <div class="modal fixed-right fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-vertical" role="document">
            <div class="modal-content">

                <!-- Close -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x" aria-hidden="true"></i>
                </button>

                <!-- Header-->
                <div class="modal-header line-height-fixed font-size-lg">
                    <strong class="mx-auto">{{__('Search Products')}}</strong>
                </div>

                <!-- Body: Form -->
                <div class="modal-body">
                    <form>
                        {{--                    <div class="form-group">--}}
                        {{--                        <label class="sr-only" for="modalSearchCategories">{{__('Categories')}}:</label>--}}
                        {{--                        <select class="custom-select" id="modalSearchCategories">--}}
                        {{--                            <option selected>All Categories</option>--}}
                        {{--                            <option>Women</option>--}}
                        {{--                            <option>Men</option>--}}
                        {{--                            <option>Kids</option>--}}
                        {{--                        </select>--}}
                        {{--                    </div>--}}
                        <div class="input-group input-group-merge">
                            <input class="form-control top-search" wire:model="search" type="search" placeholder="{{__('Search')}}">
                            <div class="input-group-append">
                                <button class="btn btn-outline-border" type="submit">
                                    <i class="fe fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                @if(count($response))
                    <div class="modal-body border-top font-size-sm">

                        <!-- Heading -->
                        <p>{{__('Search Results')}}:</p>

                        <!-- Items -->
                        @foreach($response as $product)
                            <div class="row align-items-center position-relative mb-5">
                                <div class="col-4 col-md-3">

                                    <!-- Image -->
                                    <img class="img-fluid lazy-image-loading" src="{{$product->sample_image}}"
                                         data-src="{{$product->url_key}}" alt="{{$product->name}}">

                                </div>
                                <div class="col position-static">

                                    <!-- Text -->
                                    <p class="mb-0 font-weight-bold">
                                        <a class="stretched-link text-body" href="{{$product->url_key}}">{{$product->name}}</a> <br>
                                        <span class="text-muted">${{$product->price}}</span>
                                    </p>

                                </div>
                            </div>
                        @endforeach

                        @if(count($response) > 5)
                        <!-- Button -->
                            <a class="btn btn-link px-0 text-reset" href="{{route('search')}}?q={{$query}}">
                                View All <i class="fe fe-arrow-right ml-2"></i>
                            </a>
                        @endif

                    </div>
                @else

                <!-- Body: Empty (remove `.d-none` to disable it) -->
                    <div class="modal-body">

                        <!-- Text -->
                        <p class="mb-3 font-size-sm text-center">
                            {{__('Nothing matches your search')}}
                        </p>
                        <p class="mb-0 font-size-sm text-center">
                            😞
                        </p>

                    </div>
                @endif

            </div>
        </div>
    </div>

</div>
