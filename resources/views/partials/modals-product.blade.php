<!-- Modal product detail -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-8">
                <div class="position-absolute top-0 end-0 me-3 mt-3">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- img slide -->
                        <div class="product productModal mt-5">
                            <div class="zoom" onmousemove="zoom(event)">
                                <img src="" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ps-lg-8 mt-6 mt-lg-0">
                            <a class="product-category mb-5"></a>
                            <h2 class="product-name mb-1 h1"></h2>
                            <div class="fs-4">
                                <span class="fw-bold text-dark product-price"></span>
                                <span class="text-decoration-line-through text-muted product-regular-price"></span>
                            </div>
                            <hr class="my-6">
                            <button type="button" disabled class="btn btn-outline-secondary">250g</button>
                            <div class="mt-3 row justify-content-start g-2 align-items-center">
                                <div class="col-lg-4 col-md-5 col-6 d-grid">
                                    <button type="button" class="btn btn-primary">
                                        <i class="feather-icon icon-shopping-bag me-2"></i>Add to cart
                                    </button>
                                </div>
                                <div class="col-md-4 col-5">
                                    <a class="btn btn-light" href="#" data-bs-toggle="tooltip" data-bs-html="true"
                                        aria-label="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    <a class="btn btn-light" href="#!" data-bs-toggle="tooltip" data-bs-html="true"
                                        aria-label="Wishlist"><i class="feather-icon icon-heart"></i></a>
                                </div>
                            </div>
                            <hr class="my-6">
                            <div>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>Product Code:</td>
                                            <td>FBB00255</td>
                                        </tr>
                                        <tr>
                                            <td>Availability:</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>Type:</td>
                                            <td>Fruits</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping:</td>
                                            <td>
                                                <small>01 day shipping.<span class="text-muted">( Free pickup today)</span></small>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
