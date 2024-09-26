<nav class="navbar-vertical-nav d-none d-xl-block">
    <div class="navbar-vertical">
        <div class="px-4 py-5">
            <a href="../index-2.html" class="navbar-brand">
                <img src="{{ asset('assets/images/logo/freshcart-logo.svg') }}" alt="" />
            </a>
        </div>
        <div class="navbar-vertical-content flex-grow-1" data-simplebar="">
            <ul class="navbar-nav flex-column" id="sideNavbar">
                <li class="nav-item">
                    <a class="nav-link active" href="/admin/dashboard">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-house"></i></span>
                            <span class="nav-link-text">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item mt-6 mb-3">
                    <span class="nav-label">Store Managements</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/products">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-cart"></i></span>
                            <span class="nav-link-text">Products</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapse" href="#" data-bs-toggle="collapse"
                        data-bs-target="#navCategories" aria-expanded="false" aria-controls="navCategories">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-list-task"></i></span>
                            <span class="nav-link-text">Categories</span>
                        </div>
                    </a>
                    <div id="navCategories" class="collapse" data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('parent-categories.index') }}"> Parent Categories </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('child-categories.index') }}">
                                    Child Categories
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#navCategoriesOrders" aria-expanded="false" aria-controls="navCategoriesOrders">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-bag"></i></span>
                            <span class="nav-link-text">Orders</span>
                        </div>
                    </a>
                    <div id="navCategoriesOrders" class="collapse" data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="order-list.html"> List </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="order-single.html">
                                    Single
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="vendor-grid.html">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-shop"></i></span>
                            <span class="nav-link-text">Sellers / Vendors</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/customers">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-people"></i></span>
                            <span class="nav-link-text">Customers</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reviews.html">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-star"></i></span>
                            <span class="nav-link-text">Reviews</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
