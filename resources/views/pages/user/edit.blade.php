@extends('layout.dashboard')
@section('title', 'Create User')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Account</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <form action="{{ route("user.update", $user->id) }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    <div class="card-header">
                        <h4>Input Account</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6 col-12">
                                <label>Full Name</label>
                                <input type="text" name="name" placeholder="Dwi Putra" value="{{ $user->name }}" class="form-control" required>
                                <div class="invalid-feedback">
                                    please fill in the name
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="dwptra" value="{{ $user->username }}" class="form-control" required>
                                <div class="invalid-feedback">
                                    please fill in the username
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- <div class="form-group col-md-6 col-12">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                                <div class="invalid-feedback">
                                    please fill in the password
                                </div>
                            </div> --}}
                            <div class="form-group col-12">
                                <label>Role</label>
                                <select class="form-control">
                                    <option disabled>Select Role</option>
                                    <option value="petugas" {{ $user->hasRole("petugas") == "petugas" ? "selected" : "" }}>Petugas</option>
                                    <option value="administrator" {{ $user->hasRole("administrator") == "administrator" ? "selected" : "" }}>Administrator</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-success">Save Changes</button>
                        <a href="{{ route("user") }}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
