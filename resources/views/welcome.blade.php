@extends('layouts.app')

@section('content')

<!-- Category Section Start-->
<section class="mb-lg-10 mt-lg-14 my-8">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-6">
                <h3 class="mb-0">Categories</h3>
            </div>
        </div>
        <div class="category-slider">
            @foreach($parentCategories as $parentCategory)
            <div class="item">
                <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
                    <div class="card card-product mb-lg-4">
                        <div class="card-body text-center py-8">
                            <img src="{{ asset('storage/' . $parentCategory->image) }}"
                                alt="{{ $parentCategory->name }}" class="mb-3 img-fluid category-image">
                            <div class="text-truncate">{{ $parentCategory->name }}</div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Category Section End-->

<!-- Popular Products Start-->
<section class="my-lg-14 my-8">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-6">
                <h3 class="mb-0">Products</h3>
            </div>
        </div>

        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
            @foreach($products as $product)
            <div class="col">
                <div class="card card-product">
                    <div class="card-body">

                        <div class="text-center position-relative">
                            @if($product->sale_price)
                            <div class="position-absolute top-0 start-0">
                                <span class="badge bg-danger">Sale</span>
                            </div>
                            @endif
                            <a href="#!">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                    class="mb-3 img-fluid product-image">
                            </a>

                            <div class="card-product-action">
                                <a href="javascript:void(0);" class="btn-action" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal"
                                    data-product-category="{{ $product->childCategory->name }}"
                                    data-product-name="{{ $product->name }}"
                                    data-product-image="{{ asset('storage/' . $product->image) }}"
                                    data-product-price="{{ $product->sale_price ?? $product->regular_price }}"
                                    data-product-regular-price="{{ $product->regular_price }}"
                                    data-product-sale-price="{{ $product->sale_price }}">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" title="Quick View"></i>
                                </a>

                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Wishlist"><i class="bi bi-heart"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                            </div>
                        </div>
                        <div class="text-small mb-1">
                            <a href="#!" class="text-decoration-none text-muted">
                                <small>{{ $product->childCategory->name ?? 'Uncategorized' }}</small>
                            </a>
                        </div>
                        <h2 class="fs-6">
                            <a href="pages/shop-single.html" class="text-inherit text-decoration-none">{{
                                $product->name}}</a>
                        </h2>
                        <div>
                            <small class="text-warning">
                                <!-- Static Stars since no rating field exists -->
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </small>
                            <span class="text-muted small">4.5(149)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="text-dark">Rp{{ number_format($product->sale_price ??
                                    $product->regular_price, 2, ',', '.') }}</span>
                                @if($product->sale_price)
                                <span class="text-decoration-line-through text-muted">Rp{{
                                    number_format($product->regular_price, 2, ',', '.') }}</span>
                                @endif
                            </div>
                            <div>
                                <a href="#!" class="btn btn-primary btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-plus">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg> Add
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{ $products->links() }}
        </div>
    </div>
</section>
<!-- Popular Products End-->

<style>
    .category-image {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 10px;
    }

    .product-image {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const quickViewModal = document.getElementById('quickViewModal');

        quickViewModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            const productImage = button.getAttribute('data-product-image');
            const productCategory = button.getAttribute('data-product-category');
            const productName = button.getAttribute('data-product-name');
            const productPrice = button.getAttribute('data-product-price');
            const regularPrice = button.getAttribute('data-product-regular-price');
            const salePrice = button.getAttribute('data-product-sale-price');

            const zoomDiv = quickViewModal.querySelector('.zoom');
            const productImgTag = quickViewModal.querySelector('.modal-body img');

            zoomDiv.style.backgroundImage = `url('${productImage}')`;

            productImgTag.src = productImage;

            quickViewModal.querySelector('.product-category').textContent = productCategory;
            quickViewModal.querySelector('.product-name').textContent = productName;
            quickViewModal.querySelector('.product-price').textContent = 'Rp' + new Intl.NumberFormat('id-ID').format(productPrice);

            const regularPriceElem = quickViewModal.querySelector('.product-regular-price');
            if (salePrice) {
                regularPriceElem.textContent = 'Rp' + new Intl.NumberFormat('id-ID').format(regularPrice);
                regularPriceElem.style.display = 'inline';
            } else {
                regularPriceElem.style.display = 'none';
            }
        });
    });
</script>



@endsection
