<div>
    <!-- Filters -->
    <form class="mb-10 mb-md-0">
        <ul class="nav nav-vertical" id="filterNav">
            <li class="nav-item">

                <!-- Toggle -->
                <a class="nav-link dropdown-toggle font-size-lg text-reset border-bottom mb-6"
                   data-toggle="collapse" href="#categoryCollapse">
                    Category
                </a>

                <!-- Collapse -->
                <div class="collapse show" id="categoryCollapse">
                    <div class="form-group">
                        <ul class="list-styled mb-0" id="productsNav">
                            <li class="list-styled-item">
                                <a class="list-styled-link" href="">
                                    All Products
                                </a>
                            </li>
                            @foreach($categories as $parentIndex => $category)
                                <li class="list-styled-item">
                                    <a class="list-styled-link" data-toggle="collapse"
                                       href="#{{$category->url_key}}Collapse">
                                        {{$category->name}} ({{$category->products->count()}})
                                    </a>
                                    @if(count($category->childCategories))
                                        <div class="collapse" id="{{$category->url_key}}Collapse"
                                             data-parent="#productsNav">
                                            <div class="py-4 pl-5">
                                                @foreach($category->childCategories as $childIndex => $subCategory)
                                                    <div class="custom-control custom-checkbox mb-3" wire:key="{{$childIndex.$parentIndex}}-option">
                                                        <input class="custom-control-input"
                                                               id="{{$subCategory->url_key}}"
                                                               value="{{$subCategory->id}}"
                                                               wire:model="cat_id.{{$subCategory->id}}"
                                                               wire:click="filterByCategory({{$subCategory->id}})"
                                                               type="checkbox">
                                                        <label class="custom-control-label" for="{{$subCategory->url_key}}">
                                                            {{$subCategory->name}} ({{$subCategory->products->count()}})
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </li>
            <li class="nav-item">

                <!-- Toggle -->
                <a class="nav-link dropdown-toggle font-size-lg text-reset border-bottom mb-6"
                   data-toggle="collapse" href="#seasonCollapse">
                    Season
                </a>

                <!-- Collapse -->
                <div class="collapse" id="seasonCollapse" data-toggle="simplebar"
                     data-target="#seasonGroup">
                    <div class="form-group form-group-overflow mb-6" id="seasonGroup">
                        <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" id="seasonOne" type="checkbox"
                                   checked="">
                            <label class="custom-control-label" for="seasonOne">
                                Summer
                            </label>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" id="seasonTwo" type="checkbox">
                            <label class="custom-control-label" for="seasonTwo">
                                Winter
                            </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="seasonThree" type="checkbox">
                            <label class="custom-control-label" for="seasonThree">
                                Spring &amp; Autumn
                            </label>
                        </div>
                    </div>
                </div>

            </li>
            <li class="nav-item">

                <!-- Toggle -->
                <a class="nav-link dropdown-toggle font-size-lg text-reset border-bottom mb-6"
                   data-toggle="collapse" href="#sizeCollapse">
                    Size
                </a>

                <!-- Collapse -->
                <div class="collapse" id="sizeCollapse" data-toggle="simplebar"
                     data-target="#sizeGroup">
                    <div class="form-group form-group-overlow mb-6" id="sizeGroup">
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input class="custom-control-input" id="sizeOne" type="checkbox">
                            <label class="custom-control-label" for="sizeOne">
                                3XS
                            </label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input class="custom-control-input" id="sizeTwo" type="checkbox"
                                   disabled="">
                            <label class="custom-control-label" for="sizeTwo">
                                2XS
                            </label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input class="custom-control-input" id="sizeThree" type="checkbox">
                            <label class="custom-control-label" for="sizeThree">
                                XS
                            </label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input class="custom-control-input" id="sizeFour" type="checkbox">
                            <label class="custom-control-label" for="sizeFour">
                                S
                            </label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input class="custom-control-input" id="sizeFive" type="checkbox"
                                   checked="">
                            <label class="custom-control-label" for="sizeFive">
                                M
                            </label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input class="custom-control-input" id="sizeSix" type="checkbox">
                            <label class="custom-control-label" for="sizeSix">
                                L
                            </label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input class="custom-control-input" id="sizeSeven" type="checkbox">
                            <label class="custom-control-label" for="sizeSeven">
                                XL
                            </label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input class="custom-control-input" id="sizeEight" type="checkbox"
                                   disabled="">
                            <label class="custom-control-label" for="sizeEight">
                                2XL
                            </label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input class="custom-control-input" id="sizeNine" type="checkbox">
                            <label class="custom-control-label" for="sizeNine">
                                3XL
                            </label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input class="custom-control-input" id="sizeTen" type="checkbox">
                            <label class="custom-control-label" for="sizeTen">
                                4XL
                            </label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input class="custom-control-input" id="sizeEleven" type="checkbox">
                            <label class="custom-control-label" for="sizeEleven">
                                One Size
                            </label>
                        </div>
                    </div>
                </div>

            </li>
            <li class="nav-item">

                <!-- Toggle -->
                <a class="nav-link dropdown-toggle font-size-lg text-reset border-bottom mb-6"
                   data-toggle="collapse" href="#colorCollapse">
                    Color
                </a>

                <!-- Collapse -->
                <div class="collapse" id="colorCollapse" data-toggle="simplebar"
                     data-target="#colorGroup">
                    <div class="form-group form-group-overflow mb-6" id="colorGroup">
                        <div class="custom-control custom-control-color mb-3">
                            <input class="custom-control-input" id="colorOne" type="checkbox">
                            <label class="custom-control-label text-dark" for="colorOne">
                                <span class="text-body">Black</span>
                            </label>
                        </div>
                        <div class="custom-control custom-control-color mb-3">
                            <input class="custom-control-input" id="colorTwo" type="checkbox"
                                   checked="">
                            <label class="custom-control-label" style="color: #f9f9f9;" for="colorTwo">
                                <span class="text-body">White</span>
                            </label>
                        </div>
                        <div class="custom-control custom-control-color mb-3">
                            <input class="custom-control-input" id="colorThree" type="checkbox">
                            <label class="custom-control-label text-info" for="colorThree">
                                <span class="text-body">Blue</span>
                            </label>
                        </div>
                        <div class="custom-control custom-control-color mb-3">
                            <input class="custom-control-input" id="colorFour" type="checkbox">
                            <label class="custom-control-label text-primary" for="colorFour">
                                <span class="text-body">Red</span>
                            </label>
                        </div>
                        <div class="custom-control custom-control-color mb-3">
                            <input class="custom-control-input" id="colorFive" type="checkbox"
                                   disabled="">
                            <label class="custom-control-label" for="colorFive" style="color: #795548">
                                <span class="text-body">Brown</span>
                            </label>
                        </div>
                        <div class="custom-control custom-control-color mb-3">
                            <input class="custom-control-input" id="colorSix" type="checkbox">
                            <label class="custom-control-label text-gray-300" for="colorSix">
                                <span class="text-body">Gray</span>
                            </label>
                        </div>
                        <div class="custom-control custom-control-color mb-3">
                            <input class="custom-control-input" id="colorSeven" type="checkbox">
                            <label class="custom-control-label" for="colorSeven"
                                   style="color: #17a2b8;">
                                <span class="text-body">Cyan</span>
                            </label>
                        </div>
                        <div class="custom-control custom-control-color">
                            <input class="custom-control-input" id="colorEight" type="checkbox">
                            <label class="custom-control-label" for="colorEight"
                                   style="color: #e83e8c;">
                                <span class="text-body">Pink</span>
                            </label>
                        </div>
                    </div>
                </div>

            </li>
            <li class="nav-item">

                <!-- Toggle -->
                <a class="nav-link dropdown-toggle font-size-lg text-reset border-bottom mb-6"
                   data-toggle="collapse" href="#brandCollapse">
                    Brand
                </a>

                <!-- Collapse -->
                <div class="collapse" id="brandCollapse" data-toggle="simplebar"
                     data-target="#brandGroup">

                    <!-- Search -->
                    <div data-toggle="lists"
                         data-options="{&quot;valueNames&quot;: [&quot;name&quot;]}">

                        <!-- Input group -->
                        <div class="input-group input-group-merge mb-6">
                            <input class="form-control form-control-xs search" type="search"
                                   placeholder="Search Brand">

                            <!-- Button -->
                            <div class="input-group-append">
                                <button class="btn btn-outline-border btn-xs">
                                    <i class="fe fe-search"></i>
                                </button>
                            </div>

                        </div>

                        <!-- Form group -->
                        <div class="form-group form-group-overflow mb-6" id="brandGroup">
                            <div class="list">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" id="brandOne" type="checkbox">
                                    <label class="custom-control-label name" for="brandOne">
                                        Dsquared2
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" id="brandTwo" type="checkbox"
                                           disabled="">
                                    <label class="custom-control-label name" for="brandTwo">
                                        Alexander McQueen
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" id="brandThree" type="checkbox">
                                    <label class="custom-control-label name" for="brandThree">
                                        Balenciaga
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" id="brandFour" type="checkbox"
                                           checked="">
                                    <label class="custom-control-label name" for="brandFour">
                                        Adidas
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" id="brandFive" type="checkbox">
                                    <label class="custom-control-label name" for="brandFive">
                                        Balmain
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" id="brandSix" type="checkbox">
                                    <label class="custom-control-label name" for="brandSix">
                                        Burberry
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" id="brandSeven" type="checkbox">
                                    <label class="custom-control-label name" for="brandSeven">
                                        Chloé
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" id="brandEight" type="checkbox">
                                    <label class="custom-control-label name" for="brandEight">
                                        Kenzo
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="brandNine" type="checkbox">
                                    <label class="custom-control-label name" for="brandNine">
                                        Givenchy
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </li>
            <li class="nav-item">

                <!-- Toggle -->
                <a class="nav-link dropdown-toggle font-size-lg text-reset border-bottom mb-6"
                   data-toggle="collapse" href="#priceCollapse">
                    Price
                </a>

                <!-- Collapse -->
                <div class="collapse" id="priceCollapse" data-toggle="simplebar"
                     data-target="#priceGroup">

                    <!-- Form group-->
                    <div class="form-group form-group-overflow mb-6" id="priceGroup">
                        <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" id="priceOne" type="checkbox"
                                   checked="">
                            <label class="custom-control-label" for="priceOne">
                                $10.00 - $49.00
                            </label>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" id="priceTwo" type="checkbox"
                                   checked="">
                            <label class="custom-control-label" for="priceTwo">
                                $50.00 - $99.00
                            </label>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" id="priceThree" type="checkbox">
                            <label class="custom-control-label" for="priceThree">
                                $100.00 - $199.00
                            </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="priceFour" type="checkbox">
                            <label class="custom-control-label" for="priceFour">
                                $200.00 and Up
                            </label>
                        </div>
                    </div>

                    <!-- Range -->
                    <div class="d-flex align-items-center">

                        <!-- Input -->
                        <input type="number" class="form-control form-control-xs" placeholder="$10.00"
                               min="10">

                        <!-- Divider -->
                        <div class="text-gray-350 mx-2">‒</div>

                        <!-- Input -->
                        <input type="number" class="form-control form-control-xs" placeholder="$350.00"
                               max="350">

                    </div>

                </div>

            </li>
        </ul>
    </form>
</div>
