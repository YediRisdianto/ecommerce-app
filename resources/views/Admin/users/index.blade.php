@extends('Admin.layouts.main')

@section('content')
    <!-- Header Row -->
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
                <!-- Page Header -->
                <div>
                    <h2>Users</h2>
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="{{ route('users.create') }}" class="btn btn-primary">Add New User</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Search and Filters Row -->
    <div class="row mb-5">
        <div class="col-xl-12 col-12 mb-5">
            <div class="card h-100 card-lg">
                <div class="p-6">
                    <div class="row justify-content-between">
                        <div class="col-md-4 col-12">
                            <input class="form-control me-2" type="search" name="search" placeholder="Search Users" aria-label="Search">
                        </div>
                        <!-- Optional: Add more filters here -->
                    </div>
                </div>

                <!-- Users Table -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap">
                            <thead class="bg-light">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Registered At</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if($user->image_path)
                                                    <img src="{{ asset('storage/' . $user->image_path) }}" alt="{{ $user->name }}" class="avatar avatar-xs rounded-circle">
                                                @else
                                                    <img src="{{ asset('assets/images/avatar/user-placeholder.svg') }}" alt="No Image" class="avatar avatar-xs rounded-circle">
                                                @endif
                                                <div class="ms-2">
                                                    <a href="{{ route('users.show', $user->id) }}" class="text-inherit">{{ $user->name }}</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <span class="badge bg-{{ $user->role === 'admin' ? 'danger' : 'secondary' }}">
                                                {{ ucfirst($user->role) }}
                                            </span>
                                        </td>
                                        <td>{{ $user->created_at->format('d M, Y') }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="feather-icon icon-more-vertical fs-5"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('users.edit', $user->id) }}">
                                                            <i class="bi bi-pencil-square me-3"></i>Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item text-danger">
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
