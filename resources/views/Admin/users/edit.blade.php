@extends('Admin.layouts.main')

@section('content')
    <!-- Row -->
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
                <!-- Page Header -->
                <div>
                    <h2>Edit User</h2>
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-inherit">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('users.index') }}" class="text-inherit">Users</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit User
                            </li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="{{ route('users.index') }}" class="btn btn-light">Back to Users</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Row -->
    <div class="row">
        <div class="col-lg-12 col-12">
            <!-- Card -->
            <div class="card mb-6 shadow border-0">
                <!-- Card Body -->
                <div class="card-body p-6">
                    <!-- Edit User Form -->
                    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Profile Image Section -->
                        <h4 class="mb-5 h5">Profile Image</h4>
                        <div class="mb-4 d-flex">
                            <div class="position-relative">
                                @if($user->image_path)
                                    <img class="image icon-shape icon-xxxl bg-light rounded-4" src="{{ asset('storage/' . $user->image_path) }}" alt="{{ $user->name }}" />
                                @else
                                    <img class="image icon-shape icon-xxxl bg-light rounded-4" src="{{ asset('assets/images/icons/bakery.svg') }}" alt="No Image" />
                                @endif

                                <div class="file-upload position-absolute end-0 top-0 mt-n2 me-n1">
                                    <input type="file" name="image_path" class="file-input" accept="image/*" />
                                    <span class="icon-shape icon-sm rounded-circle bg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-pencil-fill text-muted" viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- User Information Section -->
                        <h4 class="mb-4 h5 mt-5">User Information</h4>

                        <div class="row">
                            <!-- Name -->
                            <div class="mb-3 col-lg-6">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name', $user->name) }}" required />
                            </div>

                            <!-- Email -->
                            <div class="mb-3 col-lg-6">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', $user->email) }}" required />
                            </div>

                            <!-- Password -->
                            <div class="mb-3 col-lg-6">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" />
                                <small class="form-text text-muted">Leave blank if you don't want to change the password.</small>
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-3 col-lg-6">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" />
                            </div>

                            <!-- Role -->
                            <div class="mb-3 col-lg-6">
                                <label class="form-label">Role</label>
                                <select name="role" class="form-select" required>
                                    <option value="">Select Role</option>
                                    <option value="customer" {{ old('role', $user->role) == 'customer' ? 'selected' : '' }}>Customer</option>
                                    <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                </select>
                            </div>

                            <!-- Submit Buttons -->
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">Update User</button>
                                <a href="{{ route('users.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
