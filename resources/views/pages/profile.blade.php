@extends('layout.dashboard')

@section('title', 'Profile')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, {{ Auth::user()->name }}!</h2>
            <p class="section-lead">
                Change information about yourself.
            </p>

            @if (session('fail'))
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        <b>Fail:</b>
                        {{ session('fail') }}
                    </div>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        <b>Success:</b>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            @if (session('err'))
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        <b>Error:</b>
                        {{ session('err') }}
                    </div>
                </div>
            @endif
            <div class="mt-sm-4">
                <div class="card">
                    <form method="post" action="{{ route('profile.update') }}" class="needs-validation" novalidate="">
                        @method('PATCH')
                        @csrf
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ Auth::user()->name }}" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the full name
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username"
                                        value="{{ Auth::user()->username }}" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the username
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the password
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#exampleModal">Change
                                Password</button>
                            <button class="btn btn-success">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('profile.password') }}" class="needs-validation" novalidate="">
                    @method('PATCH')
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="old_password">Old Password</label>
                            <input id="old_password" class="form-control" name="old_password" tabindex="1" type="password"
                                required autofocus>
                            <div class="invalid-feedback">
                                Please fill in your old password
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="new_password" class="control-label">New Password</label>
                            </div>
                            <input id="new_password" class="form-control" name="new_password" tabindex="2" type="password"
                                required>
                            <div class="invalid-feedback">
                                please fill in your new password
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button class="btn btn-success">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
