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
                        <input class="form-control top-search" type="search" placeholder="{{__('Search')}}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-border" type="submit">
                                <i class="fe fe-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <top-search-result></top-search-result>

        </div>
    </div>
</div>
