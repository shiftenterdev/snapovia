<template>
    <div class="modal fixed-right fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-vertical" role="document">
            <div class="modal-content">
                <!-- Close -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x" aria-hidden="true"></i>
                </button>

                <!-- Header-->
                <div class="modal-header line-height-fixed font-size-lg">
                    <strong class="mx-auto">Search Products</strong>
                </div>

                <!-- Body: Form -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="sr-only" for="modalSearchCategories">Categories:</label>
                            <select class="custom-select" id="modalSearchCategories">
                                <option selected>All Categories</option>
                                <option>Women</option>
                                <option>Men</option>
                                <option>Kids</option>
                            </select>
                        </div>
                        <div class="input-group input-group-merge">
                            <input class="form-control top-search" type="search"
                                   placeholder="Search" v-model="search">
                            <div class="input-group-append">
                                <button class="btn btn-outline-border" type="submit">
                                    <i class="fe fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


                <div v-if="response.length && search" class="modal-body border-top font-size-sm">

                    <!-- Heading -->
                    <p>Search Results:</p>

                    <!-- Items -->
                    <div v-for="product in response" class="row align-items-center position-relative mb-5">
                        <div class="col-4 col-md-3">

                            <!-- Image -->
                            <img class="img-fluid" :src="product.sample_image"
                                 :alt="product.name">

                        </div>
                        <div class="col position-static">

                            <!-- Text -->
                            <p class="mb-0 font-weight-bold">
                                <a class="stretched-link text-body" :href="product.url_key">{{product.name}}</a>
                                <br>
                                <span class="text-muted">${{productPrice(product.price)}}</span>
                            </p>

                        </div>
                    </div>


                    <!-- Button -->
                    <a v-if="response.length > 5" class="btn btn-link px-0 text-reset" :href="'/search?search='+search">
                        View All <i class="fe fe-arrow-right ml-2"></i>
                    </a>


                </div>


                <!-- Body: Empty (remove `.d-none` to disable it) -->
                <div v-else-if="!response.length && search" class="modal-body">

                    <!-- Text -->
                    <p class="mb-3 font-size-sm text-center">
                        Nothing matches your search
                    </p>
                    <p class="mb-0 font-size-sm text-center">
                        😞
                    </p>

                </div>

                <div v-if="!search" class="modal-body">

                    <!-- Text -->
                    <p class="mb-3 font-size-sm text-center">
                        ⌨ Search your product
                    </p>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import _ from 'lodash'
    export default {
        name: 'Search',
        data: function () {
            return {
                search: '',
                response: []
            }
        },
        watch: {
            search: {
                handler: _.debounce(function () {
                    this.searchProducts()
                }, 500)
            }
        },
        methods: {
            searchProducts () {
                if(this.search.length > 1) {
                    axios.post('/api/search',{search:this.search})
                        .then(r => r.data)
                        .then(r => {
                            this.response = r.data
                        }).catch(e => {
                        this.response = [];
                    });
                }
            },
            productPrice (price) {
                return (price / 100).toFixed(2)
            }
        }
    }
</script>
