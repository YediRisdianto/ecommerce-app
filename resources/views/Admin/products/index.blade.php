@extends('Admin.layouts.main')

@section('content')
    <div class="row mb-8">
        <div class="col-md-12">
            <!-- Page Header -->
            <div class="d-md-flex justify-content-between align-items-center">
                <div>
                    <h2>Products</h2>
                    <!-- Breadcrumb -->
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
                <!-- Button -->
                <div>
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-12 mb-5">
            <!-- Card -->
            <div class="card h-100 card-lg">
                <div class="px-6 py-6">
                    <div class="row justify-content-between">
                        <!-- Form -->
                        <div class="col-lg-4 col-md-6 col-12 mb-2 mb-lg-0">
                            <input class="form-control" type="search" name="search" placeholder="Search Products"
                                aria-label="Search" />
                        </div>
                        <!-- Select Option for Status Filtering -->
                        <div class="col-lg-2 col-md-4 col-12">
                            <form method="GET" action="{{ route('products.index') }}">
                                <select class="form-select" name="status" onchange="this.form.submit()">
                                    <option value="">All Status</option>
                                    <option value="Active" {{ request('status') == 'Active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="Inactive" {{ request('status') == 'Inactive' ? 'selected' : '' }}>
                                        Inactive</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body p-0">
                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-centered table-hover text-nowrap table-borderless mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            <a href="#!">
                                                <img src="{{ asset('storage/' . $product->image) }}"
                                                    alt="{{ $product->name }}" class="icon-shape icon-md" />
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" class="text-reset">{{ $product->name }}</a>
                                        </td>
                                        <td>
                                            {{ $product->childCategory ? $product->childCategory->name : 'Uncategorized' }}
                                        </td>
                                        <td>
                                            <span
                                                class="badge bg-light-primary text-dark-primary">{{ $product->status }}</span>
                                        </td>
                                        <td>Rp{{ number_format($product->regular_price, 2) }}</td>
                                        <td>{{ $product->created_at->format('d M Y') }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="feather-icon icon-more-vertical fs-5"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('products.edit', $product->id) }}">
                                                            <i class="bi bi-pencil-square me-3"></i>Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('products.destroy', $product->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item">
                                                                <i class="bi bi-trash me-3"></i>Delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
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
