<aside class="sidebar">
    <form action="{{ route('user.wishlistItems.index') }}" method="get" id="searchForm">
        <div class="input-group mb-3 pb-1">
            <input class="form-control text-1" placeholder="Search..." name="search" id="search" type="text"
                value="{{ request('search') }}">
            <input type="hidden" name="category" value="{{ request('category') }}">
            <input type="hidden" name="subcategory" value="{{ request('subcategory') }}">
            <input type="hidden" name="sort" value="{{ request('sort') }}">
            <button type="submit" class="btn btn-dark text-1 p-2">
                <i class="fas fa-search m-2"></i>
            </button>
        </div>
    </form>

    <h5 class="font-weight-semi-bold pt-3">Products</h5>
    <form action="{{ route('user.wishlistItems.index') }}" method="get" id="filterForm">
        <input type="hidden" name="search" value="{{ request('search') }}">
        <input type="hidden" name="sort" value="{{ request('sort') }}">

        <div class="accordion" id="categoryAccordion">
            @foreach ($categories as $category)
                <div class="card border-0 mb-2">
                    <div class="card-header bg-light p-0" id="heading{{ $category->id }}">
                        <div class="d-flex align-items-center">
                            <div class="custom-control custom-checkbox mr-2">
                                <input type="checkbox" class="custom-control-input category-checkbox"
                                    id="category{{ $category->id }}" name="category" value="{{ $category->id }}"
                                    {{ request('category') == $category->id ? 'checked' : '' }}>
                                <label class="custom-control-label" for="category{{ $category->id }}"></label>
                            </div>
                            <h2 class="mb-0">
                                <button class="btn btn-link text-dark text-decoration-none w-100 text-left"
                                    type="button" data-toggle="collapse" data-target="#collapse{{ $category->id }}"
                                    aria-expanded="{{ request('category') == $category->id ? 'true' : 'false' }}"
                                    aria-controls="collapse{{ $category->id }}">
                                    {{ $category->name }}
                                </button>
                            </h2>
                        </div>
                    </div>
                    <div id="collapse{{ $category->id }}"
                        class="collapse {{ request('category') == $category->id ? 'show' : '' }}"
                        aria-labelledby="heading{{ $category->id }}" data-parent="#categoryAccordion">
                        <div class="card-body pt-0">
                            <div class="list-group list-group-flush">
                                @foreach ($subcategories->where('category_id', $category->id) as $subcategory)
                                    <div class="list-group-item border-0 px-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input subcategory-checkbox"
                                                id="subcategory{{ $subcategory->id }}" name="subcategory"
                                                value="{{ $subcategory->id }}"
                                                {{ request('subcategory') == $subcategory->id ? 'checked' : '' }}>
                                            <label class="custom-control-label"
                                                for="subcategory{{ $subcategory->id }}">
                                                {{ $subcategory->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </form>


    <div class="row mb-5">
        <div class="col-sm-4 col-lg-12">
            <h5 class="font-weight-semi-bold pt-5">Recent Products</h5>
            <div class="product row row-gutter-sm align-items-center mb-4">
                <div class="col-5 col-lg-5">
                    <div class="product-thumb-info border-0">
                        <a href="shop-product-sidebar-left.html">
                            <div class="product-thumb-info-image">
                                <img alt="" class="img-fluid" src="img/products/product-grey-1.jpg">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-7 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                    <a href="#"
                        class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">electronics</a>
                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                        <a href="shop-product-sidebar-right.html"
                            class="text-color-dark text-color-hover-primary text-decoration-none">Photo
                            Camera</a>
                    </h3>
                    <div title="Rated 5 out of 5">
                        <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                            data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                    </div>
                    <p class="price text-4 mb-0">
                        <span class="sale text-color-dark font-weight-semi-bold">$69,00</span>
                        <span class="amount">$59,00</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-12">
            <h5 class="font-weight-semi-bold pt-5">Last Viewed Products</h5>
            <div class="product row row-gutter-sm align-items-center mb-4">
                <div class="col-5 col-lg-5">
                    <div class="product-thumb-info border-0">
                        <a href="shop-product-sidebar-left.html">
                            <div class="product-thumb-info-image">
                                <img alt="" class="img-fluid" src="img/products/product-grey-3.jpg">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-7 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                    <a href="#"
                        class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">sports</a>
                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                        <a href="shop-product-sidebar-right.html"
                            class="text-color-dark text-color-hover-primary text-decoration-none">Workout</a>
                    </h3>
                    <div title="Rated 5 out of 5">
                        <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                            data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                    </div>
                    <p class="price text-4 mb-0">
                        <span class="sale text-color-dark font-weight-semi-bold">$40,00</span>
                        <span class="amount">$30,00</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-12">
            <h5 class="font-weight-semi-bold pt-5">Top Rated Products</h5>
            <div class="product row row-gutter-sm align-items-center mb-4">
                <div class="col-5 col-lg-5">
                    <div class="product-thumb-info border-0">
                        <a href="shop-product-sidebar-left.html">
                            <div class="product-thumb-info-image">
                                <img alt="" class="img-fluid" src="img/products/product-grey-6.jpg">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-7 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                    <a href="#"
                        class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">hat</a>
                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                        <a href="shop-product-sidebar-right.html"
                            class="text-color-dark text-color-hover-primary text-decoration-none">Blue
                            Hat</a>
                    </h3>
                    <div title="Rated 5 out of 5">
                        <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                            data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                    </div>
                    <p class="price text-4 mb-0">
                        <span class="sale text-color-dark font-weight-semi-bold">$299,00</span>
                        <span class="amount">$289,00</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</aside>

@push('scripts')
    <script>
        // Auto-submit on checkbox change (for category and subcategory filters)
        document.querySelectorAll('.category-checkbox, .subcategory-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                document.getElementById('filterForm').submit();
            });
        });
    </script>
@endpush
