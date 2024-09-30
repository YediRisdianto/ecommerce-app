@extends('Admin.layouts.main')

@section('content')
    <!-- row -->
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
                <!-- page header -->
                <div>
                    <h2>Add Product</h2>
                    <!-- breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Products</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                        </ol>
                    </nav>
                </div>
                <!-- button -->
                <div>
                    <a href="/admin/products" class="btn btn-light">Back to Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-8 col-12">
            <!-- card -->
            <div class="card mb-6 card-lg">
                <!-- card body -->
                <div class="card-body p-7">
                    <h4 class="mb-4 h5">Product Information</h4>
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- input -->
                            <div class="mb-3 col-lg-6">
                                <label class="form-label">Product Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Product Name"
                                    required>
                            </div>
                            <!-- input -->
                            <div class="mb-3 col-lg-6">
                                <label class="form-label">Product Category</label>
                                <select class="form-select" name="category_child_id" required>
                                    <option selected disabled>Select Category</option>
                                    @foreach ($childCategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- input -->
                            <div class="mb-3 col-lg-6">
                                <label class="form-label">Weight (grams)</label>
                                <input type="number" class="form-control" name="weight" placeholder="Weight" required>
                            </div>
                            <!-- input -->
                            <div class="mb-3 col-lg-12">
                                <label class="form-label">Product Description</label>
                                <textarea class="form-control" name="description" rows="4" placeholder="Description" required></textarea>
                            </div>
                            <!-- input -->
                            <div class="mb-3 col-lg-12">
                                <label class="form-label">Product Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <!-- card -->
            <div class="card mb-3 card-lg">
                <!-- card body -->
                <div class="card-body p-6">
                    <h4 class="mb-4 h5">Pricing</h4>
                    <!-- input -->
                    <div class="mb-3">
                        <label class="form-label">Regular Price</label>
                        <input type="number" class="form-control" name="regular_price" placeholder="Regular Price"
                            required>
                    </div>
                    <!-- input -->
                    <div class="mb-3">
                        <label class="form-label">Sale Price (optional)</label>
                        <input type="number" class="form-control" name="sale_price" placeholder="Sale Price">
                    </div>
                </div>
            </div>

            <div class="card mb-3 card-lg">
                <div class="card-body p-5">
                    <h4 class="mb-4 h5">Status</h4>
                    <input type="hidden" name="status" value="Inactive"> 
                    <div class="form-check form-switch mb-4">
                        <input class="form-check-input" type="checkbox" name="status" value="Active" id="flexSwitchStock" checked>
                        <label class="form-check-label" for="flexSwitchStock">Active</label>
                    </div>
                </div>
            </div>

            <!-- button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary mb-3">Create Product</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
        </form>
    </div>
@endsection
