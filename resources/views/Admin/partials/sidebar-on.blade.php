<nav class="navbar-vertical-nav offcanvas offcanvas-start navbar-offcanvac" tabindex="-1" id="offcanvasExample">
    <div class="navbar-vertical">
        <div class="px-4 py-5 d-flex justify-content-between align-items-center">
            <a href="../index-2.html" class="navbar-brand">
                <img src="{{ asset('assets/images/logo/freshcart-logo.svg') }}" alt="" />
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="navbar-vertical-content flex-grow-1" data-simplebar="">
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="/admin/dashboard">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-house"></i></span>
                            <span>Dashboard</span>
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
                    <a class="nav-link" href="/admin/categories">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-list-task"></i></span>
                            <span class="nav-link-text">Categories</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#navOrders"
                        aria-expanded="false" aria-controls="navOrders">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-bag"></i></span>
                            <span class="nav-link-text">Orders</span>
                        </div>
                    </a>
                    <div id="navOrders" class="collapse" data-bs-parent="#sideNavbar">
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
                <li class="nav-item mt-6 mb-3">
                    <span class="nav-label">Site Settings</span>
                    <span class="badge bg-light-info text-dark-info">Coming Soon</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#!">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-newspaper"></i></span>
                            <span class="nav-link-text">Blog</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-images"></i></span>
                            <span class="nav-link-text">Media</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#!">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-gear"></i></span>
                            <span class="nav-link-text">Store Settings</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item mt-6 mb-3">
                    <span class="nav-label">Support</span>
                    <span class="badge bg-light-info text-dark-info">Coming Soon</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#!">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-headphones"></i></span>
                            <span class="nav-link-text">Support Ticket</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-question-circle"></i></span>
                            <span class="nav-link-text">Help Center</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#!">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-infinity"></i></span>
                            <span class="nav-link-text">How FreshCart Works</span>
                        </div>
                    </a>
                </li>

                <li class="nav-item mt-6 mb-3">
                    <span class="nav-label">Our Apps</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#!">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-apple"></i></span>
                            <span class="nav-link-text">Apple Store</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#!">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="bi bi-google-play"></i></span>
                            <span class="nav-link-text">Google Play Store</span>
                        </div>
                    </a>
                </li>
                <li id="navMenuLevel" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse"
                                data-bs-target="#navMenuLevelSecond2" aria-expanded="false"
                                aria-controls="navMenuLevelSecond2">
                                Two Level
                            </a>
                            <div id="navMenuLevelSecond2" class="collapse" data-bs-parent="#navMenuLevel">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">NavItem 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">NavItem 2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                data-bs-target="#navMenuLevelThree2" aria-expanded="false"
                                aria-controls="navMenuLevelThree2">
                                Three Level
                            </a>
                            <div id="navMenuLevelThree2" class="collapse" data-bs-parent="#navMenuLevel">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                            data-bs-target="#navMenuLevelThree3" aria-expanded="false"
                                            aria-controls="navMenuLevelThree3">
                                            NavItem 1
                                        </a>
                                        <div id="navMenuLevelThree3" class="collapse collapse"
                                            data-bs-parent="#navMenuLevelThree">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">
                                                        NavChild Item 1
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Nav Item 2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
