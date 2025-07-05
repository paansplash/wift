<div class="row mb-5">
    <div class="col-12 d-flex justify-content-end mb-3">
        <a href="{{ route('user.dashboard.index') }}" class="btn btn-primary me-2">
            <i class="fas fa-eye mr-2"></i> View Wishlist
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 order-2 order-lg-1">
        @include('user.components.wishlist_items.filters')

    </div>
    <div class="col-lg-9 order-1 order-lg-2">
        <div class="masonry-loader masonry-loader-loaded">
            <div class="row products product-thumb-info-list" data-plugin-masonry
                data-plugin-options="{'layoutMode': 'fitRows'}">
                @include('user.components.wishlist_items.items')
            </div>
            <div class="row">
                <div class="col">
                    <ul class="pagination float-end">
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="fas fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>