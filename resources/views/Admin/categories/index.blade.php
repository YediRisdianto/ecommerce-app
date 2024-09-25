@extends('Admin.layouts.main')

@section('content')
    <!-- row -->
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
                <!-- pageheader -->
                <div>
                    <h2>Categories</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Categories</li>
                        </ol>
                    </nav>
                </div>
                <!-- button -->
                <div>
                    <a href="/admin/categories/add" class="btn btn-primary">Add New Category</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-xl-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lg">
                <div class=" px-6 py-6 ">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-6 col-12 mb-2 mb-md-0">
                            <!-- form -->
                            <form class="d-flex" role="search">
                                <input class="form-control" type="search" placeholder="Search Category"
                                    aria-label="Search">
                            </form>
                        </div>
                        <!-- select option -->
                        <div class="col-xl-2 col-md-4 col-12">
                            <select class="form-select">
                                <option selected>Status</option>
                                <option value="Published">Published</option>
                                <option value="Unpublished">Unpublished</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- card body -->
                <div class="card-body p-0">
                    <!-- table -->
                    <div class="table-responsive ">
                        <table
                            class="table table-centered table-hover mb-0 text-nowrap table-borderless table-with-checkbox">
                            <thead class="bg-light">
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                            <label class="form-check-label" for="checkAll">

                                            </label>
                                        </div>
                                    </th>
                                    <th>Icon</th>
                                    <th> Name</th>
                                    <th>Proudct</th>
                                    <th>Status</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="categoryOne">
                                            <label class="form-check-label" for="categoryOne">

                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!"> <img src="../assets/images/icons/snacks.svg" alt=""
                                                class="icon-shape icon-sm"></a>
                                    </td>
                                    <td><a href="#" class="text-reset">Snack & Munchies</a></td>
                                    <td>12</td>

                                    <td>
                                        <span class="badge bg-light-primary text-dark-primary">Published</span>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="/admin/categories/edit"><i
                                                            class="bi bi-pencil-square me-3 "></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="categoryTwo">
                                            <label class="form-check-label" for="categoryTwo">

                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!"> <img src="../assets/images/icons/bakery.svg" alt=""
                                                class="icon-shape icon-sm"></a>
                                    </td>
                                    <td><a href="#" class="text-reset">Bakery & Biscuits</a></td>
                                    <td>8</td>

                                    <td>
                                        <span class="badge bg-light-primary text-dark-primary">Published</span>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3 "></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="categoryThree">
                                            <label class="form-check-label" for="categoryThree">

                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!"> <img src="../assets/images/icons/baby-food.svg" alt=""
                                                class="icon-shape icon-sm"></a>
                                    </td>
                                    <td><a href="#" class="text-reset">Baby Care</a></td>
                                    <td>32</td>

                                    <td>
                                        <span class="badge bg-light-primary text-dark-primary">Published</span>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3 "></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="categoryFour">
                                            <label class="form-check-label" for="categoryFour">

                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!"> <img src="../assets/images/icons/wine.svg" alt=""
                                                class="icon-shape icon-sm"></a>
                                    </td>
                                    <td><a href="#" class="text-reset">Cold Drinks & Juices</a></td>
                                    <td>34</td>

                                    <td>
                                        <span class="badge bg-light-primary text-dark-primary">Published</span>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3 "></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="categoryFive">
                                            <label class="form-check-label" for="categoryFive">

                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!"> <img src="../assets/images/icons/toiletries.svg"
                                                alt="" class="icon-shape icon-sm"></a>
                                    </td>
                                    <td><a href="#" class="text-reset">Toiletries</a></td>
                                    <td>23</td>

                                    <td>
                                        <span class="badge bg-light-danger text-dark-danger">Unpublished</span>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3 "></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="categorySeven">
                                            <label class="form-check-label" for="categorySeven">

                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!"> <img src="../assets/images/icons/dairy.svg" alt=""
                                                class="icon-shape icon-sm"></a>
                                    </td>
                                    <td><a href="#" class="text-reset">Dairy, Bread & Eggs</a></td>
                                    <td>16</td>

                                    <td>
                                        <span class="badge bg-light-primary text-dark-primary">Published</span>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3 "></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="categoryEight">
                                            <label class="form-check-label" for="categoryEight">

                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!"> <img src="../assets/images/icons/fish.svg" alt=""
                                                class="icon-shape icon-sm"></a>
                                    </td>
                                    <td><a href="#" class="text-reset">Chicken, Meat & Fish</a></td>
                                    <td>14</td>

                                    <td>
                                        <span class="badge bg-light-primary text-dark-primary">Published</span>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3 "></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="categoryNine">
                                            <label class="form-check-label" for="categoryNine">

                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!"> <img src="../assets/images/icons/fruit.svg" alt=""
                                                class="icon-shape icon-sm"></a>
                                    </td>
                                    <td><a href="#" class="text-reset">Fruits & Vegetables</a></td>
                                    <td>32</td>

                                    <td>
                                        <span class="badge bg-light-primary text-dark-primary">Published</span>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3 "></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="categoryTen">
                                            <label class="form-check-label" for="categoryTen">

                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#!"> <img src="../assets/images/icons/petfoods.svg" alt=""
                                                class="icon-shape icon-sm"></a>
                                    </td>
                                    <td><a href="#" class="text-reset">Pet Food</a></td>
                                    <td>25</td>

                                    <td>
                                        <span class="badge bg-light-danger text-dark-danger">Unpublished</span>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-trash me-3"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil-square me-3 "></i>Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="border-top d-md-flex justify-content-between align-items-center  px-6 py-6">
                    <span>Showing 1 to 8 of 12 entries</span>
                    <nav class="mt-2 mt-md-0">
                        <ul class="pagination mb-0 ">
                            <li class="page-item disabled"><a class="page-link " href="#!">Previous</a></li>
                            <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
