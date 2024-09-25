@extends('Admin.layouts.main')

@section('content')
    <div class="row mb-8">
        <div class="col-md-12">
            <!-- page header -->
            <div class="d-md-flex justify-content-between align-items-center">
                <div>
                    <h2>Products</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-inherit">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Products
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- button -->
                <div>
                    <a href="/admin/products/add" class="btn btn-primary">Add Product</a>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lg">
                <div class="px-6 py-6">
                    <div class="row justify-content-between">
                        <!-- form -->
                        <div class="col-lg-4 col-md-6 col-12 mb-2 mb-lg-0">
                            <form class="d-flex" role="search">
                                <input class="form-control" type="search" placeholder="Search Products"
                                    aria-label="Search" />
                            </form>
                        </div>
                        <!-- select option -->
                        <div class="col-lg-2 col-md-4 col-12">
                            <select class="form-select">
                                <option selected>Status</option>
                                <option value="1">Active</option>
                                <option value="2">Deactive</option>
                                <option value="3">Draft</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- card body -->
                <div class="card-body p-0">
                    <!-- table -->
                    <div class="table-responsive">
                        <table
                            class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                            <thead class="bg-light">
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="checkAll" />
                                            <label class="form-check-label" for="checkAll">
                                            </label>
                                        </div>
                                    </th>
                                    <th>Image</th>
                                    <th>Proudct Name</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Create at</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="productOne" />
                                            <label class="form-check-label" for="productOne">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!">
                                            <img src="../assets/images/products/product-img-1.jpg" alt=""
                                                class="icon-shape icon-md" /></a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-reset">Haldiram's Sev Bhujia</a>
                                    </td>
                                    <td>Snack & Munchies</td>

                                    <td>
                                        <span class="badge bg-light-primary text-dark-primary">Active</span>
                                    </td>
                                    <td>$18.00</td>
                                    <td>24 Nov 2022</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="/admin/products/edit "><i
                                                            class="bi bi-pencil-square me-3"></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="productTwo" />
                                            <label class="form-check-label" for="productTwo">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!">
                                            <img src="../assets/images/products/product-img-2.jpg" alt=""
                                                class="icon-shape icon-md" /></a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-reset">NutriChoice Digestive</a>
                                    </td>
                                    <td>Bakery & Biscuits</td>

                                    <td>
                                        <span class="badge bg-light-primary text-dark-primary">Active</span>
                                    </td>
                                    <td>$24.00</td>
                                    <td>20 Nov 2022</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3"></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="productThree" />
                                            <label class="form-check-label" for="productThree">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!">
                                            <img src="../assets/images/products/product-img-3.jpg" alt=""
                                                class="icon-shape icon-md" /></a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-reset">Cadbury 5 Star Chocolate</a>
                                    </td>
                                    <td>Snack & Munchies</td>

                                    <td>
                                        <span class="badge bg-light-primary text-dark-primary">Active</span>
                                    </td>
                                    <td>$3.00</td>
                                    <td>14 Nov 2022</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3"></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="productFour" />
                                            <label class="form-check-label" for="productFour">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!">
                                            <img src="../assets/images/products/product-img-4.jpg" alt=""
                                                class="icon-shape icon-md" /></a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-reset">Onion Flavour Potato</a>
                                    </td>
                                    <td>Snack & Munchies</td>

                                    <td>
                                        <span class="badge bg-light-warning text-dark-warning">Draft</span>
                                    </td>
                                    <td>$13.00</td>
                                    <td>08 Nov 2022</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3"></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="productFive" />
                                            <label class="form-check-label" for="productFive">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!">
                                            <img src="../assets/images/products/product-img-5.jpg" alt=""
                                                class="icon-shape icon-md" /></a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-reset">Salted Instant Popcorn</a>
                                    </td>
                                    <td>Instant Food</td>

                                    <td>
                                        <span class="badge bg-light-warning text-dark-warning">Draft</span>
                                    </td>
                                    <td>$9.00</td>
                                    <td>09 Nov 2022</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3"></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="productSix" />
                                            <label class="form-check-label" for="productSix">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!">
                                            <img src="../assets/images/products/product-img-6.jpg" alt=""
                                                class="icon-shape icon-md" /></a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-reset">Blueberry Greek Yogurt</a>
                                    </td>
                                    <td>Dairy, Bread & Eggs</td>

                                    <td>
                                        <span class="badge bg-light-danger text-dark-danger">Deactive</span>
                                    </td>
                                    <td>$11.00</td>
                                    <td>02 Nov 2022</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3"></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="productSeven" />
                                            <label class="form-check-label" for="productSeven">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!">
                                            <img src="../assets/images/products/product-img-7.jpg" alt=""
                                                class="icon-shape icon-md" /></a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-reset">Britannia Cheese Slices</a>
                                    </td>
                                    <td>Dairy, Bread & Eggs</td>

                                    <td>
                                        <span class="badge bg-light-success text-dark-success">Active</span>
                                    </td>
                                    <td>$24.00</td>
                                    <td>15 Oct 2022</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3"></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="productEight" />
                                            <label class="form-check-label" for="productEight">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!">
                                            <img src="../assets/images/products/product-img-8.jpg" alt=""
                                                class="icon-shape icon-md" /></a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-reset">Blueberry Greek Yogurt</a>
                                    </td>
                                    <td>Instant Food</td>

                                    <td>
                                        <span class="badge bg-light-danger text-dark-danger">Deactive</span>
                                    </td>
                                    <td>$12.00</td>
                                    <td>24 Oct 2022</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3"></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="productNine" />
                                            <label class="form-check-label" for="productNine">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!">
                                            <img src="../assets/images/products/product-img-9.jpg" alt=""
                                                class="icon-shape icon-md" /></a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-reset">Slurrp Millet Chocolate</a>
                                    </td>
                                    <td>Instant Food</td>

                                    <td>
                                        <span class="badge bg-light-primary text-dark-primary">Active</span>
                                    </td>
                                    <td>$8.00</td>
                                    <td>08 Oct 2022</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3"></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="productTen" />
                                            <label class="form-check-label" for="productTen">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!">
                                            <img src="../assets/images/products/product-img-10.jpg" alt=""
                                                class="icon-shape icon-md" /></a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-reset">Amul Butter - 500 g</a>
                                    </td>
                                    <td>Instant Food</td>

                                    <td>
                                        <span class="badge bg-light-primary text-dark-primary">Active</span>
                                    </td>
                                    <td>$8.00</td>
                                    <td>09 Oct 2022</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3"></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="border-top d-md-flex justify-content-between align-items-center px-6 py-6">
                    <span>Showing 1 to 8 of 12 entries</span>
                    <nav class="mt-2 mt-md-0">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#!">Previous</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link active" href="#!">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#!">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#!">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#!">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
