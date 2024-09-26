@extends('Admin.layouts.main')

@section('content')
    <!-- row -->
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
                <!-- page header -->
                <div>
                    <h2>Edit Parent Category</h2>
                    <!-- breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-inherit">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('parent-categories.index') }}" class="text-inherit">Parent Categories</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Parent Category
                            </li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="{{ route('parent-categories.index') }}" class="btn btn-light">Back to Parent Categories</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-12">
            <!-- card -->
            <div class="card mb-6 shadow border-0">
                <!-- card body -->
                <div class="card-body p-6">
                    <form action="{{ route('parent-categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h4 class="mb-5 h5">Category Image</h4>
                        <div class="mb-4 d-flex">
                            <div class="position-relative">
                                <img class="image icon-shape icon-xxxl bg-light rounded-4"
                                    src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" />
                                <div class="file-upload position-absolute end-0 top-0 mt-n2 me-n1">
                                    <input type="file" name="image" class="file-input" />
                                    <span class="icon-shape icon-sm rounded-circle bg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-pencil-fill text-muted"
                                            viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-2.68 2.68a1 1 0 0 0-.263.465l-.448 1.79a.5.5 0 0 0 .606.606l1.79-.448a1 1 0 0 0 .465-.263l2.68-2.68z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- input -->
                            <div class="mb-3 col-lg-6">
                                <label class="form-label">Category Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $category->name }}" required />
                            </div>
                            <!-- input -->
                            <div class="mb-3 col-lg-6">
                                <label class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control" value="{{ $category->slug }}" required />
                            </div>

                            <!-- input -->
                            <div class="mb-3 col-lg-12">
                                <label class="form-label">Descriptions</label>
                                <textarea name="descriptions" class="form-control" required>{{ $category->descriptions }}</textarea>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('parent-categories.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
