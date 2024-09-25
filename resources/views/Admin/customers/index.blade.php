@extends('Admin.layouts.main')

@section('content')
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
                <div>
                    <h2>Customers</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Customers</li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="#!" class="btn btn-primary">Add New Customer</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-xl-12 col-12 mb-5">
            <div class="card h-100 card-lg">

                <div class="p-6">
                    <div class="row justify-content-between">
                        <div class="col-md-4 col-12">
                            <form class="d-flex" role="search">
                                <input class="form-control" type="search" placeholder="Search Customers"
                                    aria-label="Search">

                            </form>
                        </div>

                    </div>
                </div>
                <div class="card-body p-0 ">

                    <div class="table-responsive">
                        <table
                            class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap">
                            <thead class="bg-light">
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                            <label class="form-check-label" for="checkAll">

                                            </label>
                                        </div>
                                    </th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Purchase Date</th>
                                    <th>Phone</th>
                                    <th>Spent</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="customerOne">
                                            <label class="form-check-label" for="customerOne">

                                            </label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/avatar/avatar-1.jpg" alt=""
                                                class="avatar avatar-xs rounded-circle">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">Bonnie Howe</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>bonniehowe@gmail.com</td>

                                    <td>
                                        17 May, 2023 at 3:18pm
                                    </td>
                                    <td>-</td>
                                    <td>
                                        $49.00
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

                                    <td class="pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="customerTwo">
                                            <label class="form-check-label" for="customerTwo">

                                            </label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/avatar/avatar-2.jpg" alt=""
                                                class="avatar avatar-xs rounded-circle">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">Judy Nelson</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>judynelson@gmail.com</td>

                                    <td>
                                        27 April, 2023 at 2:47pm
                                    </td>
                                    <td>435-239-6436</td>
                                    <td>
                                        $490.00
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

                                    <td class="pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="customerThree">
                                            <label class="form-check-label" for="customerThree">

                                            </label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/avatar/avatar-3.jpg" alt=""
                                                class="avatar avatar-xs rounded-circle">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">John Mattox</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>johnmattox@gmail.com</td>

                                    <td>
                                        27 April, 2023 at 2:47pm
                                    </td>
                                    <td>347-424-9526</td>
                                    <td>
                                        $29.00
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

                                    <td class="pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="customerFour">
                                            <label class="form-check-label" for="customerFour">

                                            </label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/avatar/avatar-4.jpg" alt=""
                                                class="avatar avatar-xs rounded-circle">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">Wayne Rossman</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>waynerossman@gmail.com</td>

                                    <td>
                                        27 April, 2023 at 2:47pm
                                    </td>
                                    <td>-</td>
                                    <td>
                                        $39.00
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

                                    <td class="pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="customerFive">
                                            <label class="form-check-label" for="customerFive">

                                            </label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/avatar/avatar-5.jpg" alt=""
                                                class="avatar avatar-xs rounded-circle">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">Rhonda Pinson</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>rhondapinson@gmail.com</td>

                                    <td>
                                        18 March, 2023 at 2:47pm
                                    </td>
                                    <td>304-471-8451</td>
                                    <td>
                                        $213.00
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

                                    <td class="pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="customerSix">
                                            <label class="form-check-label" for="customerSix">

                                            </label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/avatar/avatar-6.jpg" alt=""
                                                class="avatar avatar-xs rounded-circle">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">John Mattox</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>johnmattox@gmail.com</td>

                                    <td>
                                        18 March, 2023 at 2:47pm
                                    </td>
                                    <td>410-636-2682</td>
                                    <td>
                                        $490.00
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

                                    <td class="pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="customerSeven">
                                            <label class="form-check-label" for="customerSeven">

                                            </label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/avatar/avatar-7.jpg" alt=""
                                                class="avatar avatar-xs rounded-circle">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">Wayne Rossman</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>waynerossman@gmail.com</td>

                                    <td>
                                        18 March, 2023 at 2:47pm
                                    </td>
                                    <td>845-294-6681</td>
                                    <td>
                                        $39.00
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

                                    <td class="pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="customerEight">
                                            <label class="form-check-label" for="customerEight">

                                            </label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/avatar/avatar-8.jpg" alt=""
                                                class="avatar avatar-xs rounded-circle">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">Richard Shelton</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>richarddhelton@jourrapide.com</td>

                                    <td>
                                        12 March, 2023 at 9:47am
                                    </td>
                                    <td>313-887-8495</td>
                                    <td>
                                        $19.00
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

                                    <td class="pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="customerNine">
                                            <label class="form-check-label" for="customerNine">

                                            </label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/avatar/avatar-9.jpg" alt=""
                                                class="avatar avatar-xs rounded-circle">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">Stephanie Morales</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>stephaniemorales@gmail.com</td>

                                    <td>
                                        22 Feb, 2023 at 9:47pm
                                    </td>
                                    <td>812-682-1588</td>
                                    <td>
                                        $250.00
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

                                    <td class="pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="customerTen">
                                            <label class="form-check-label" for="customerTen">

                                            </label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/avatar/avatar-10.jpg" alt=""
                                                class="avatar avatar-xs rounded-circle">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">Stephanie Morales</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>stephaniemorales@gmail.com</td>

                                    <td>
                                        22 Feb, 2023 at 9:47pm
                                    </td>
                                    <td>812-682-1588</td>
                                    <td>
                                        $250.00
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

                                    <td class="pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="customerEleven">
                                            <label class="form-check-label" for="customerEleven">

                                            </label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/avatar/avatar-11.jpg" alt=""
                                                class="avatar avatar-xs rounded-circle">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">Pasquale Kidd</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>pasqualekidd@rhyta.com</td>

                                    <td>
                                        22 Feb, 2023 at 9:47pm
                                    </td>
                                    <td>336-396-0658</td>
                                    <td>
                                        $159.00
                                    </td>

                                    <td>
                                        <div class="dropdown ">
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

                    <div class="border-top d-md-flex justify-content-between align-items-center p-6">
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
    </div>
@endsection
