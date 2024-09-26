@extends('Admin.layouts.main')

@section('content')
    <!-- row -->
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
                <!-- pageheader -->
                <div>
                    <h2>Categories</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Categories</li>
                        </ol>
                    </nav>
                </div>
                <!-- button -->
                <div>
                    <a href="{{ route('child-categories.create') }}" class="btn btn-primary">Add New Category</a>
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
                    <!-- table -->
                    <div class="table-responsive ">
                        <table class="table table-centered table-hover mb-0 text-nowrap table-borderless table-with-checkbox">
                            <thead class="bg-light">
                                <tr>
                                    <th>No</th>
                                    <th>Icon</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($childCategories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if($category->image)
                                                <a href="#!">
                                                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="icon-shape icon-sm">
                                                </a>
                                            @else
                                                <span>No Image</span>
                                            @endif
                                        </td>
                                        <td><a href="#" class="text-reset">{{ $category->name }}</a></td>
                                        <td>{{ $category->descriptions }}</td>
                                        <td>{{ $category->parentCategory ? $category->parentCategory->name : 'No Parent Category' }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="feather-icon icon-more-vertical fs-5"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ route('child-categories.edit', $category->id) }}"><i class="bi bi-pencil-square me-3"></i>Edit</a></li>
                                                    <li>
                                                        <form action="{{ route('child-categories.destroy', $category->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item"><i class="bi bi-trash me-3"></i>Delete</button>
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
