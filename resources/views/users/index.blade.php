@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login Form</div>
                <div class="card-body">
                    <!--
                        why we validate?
                        every day there are:
                        500 million tweets
                        294 billion emails
                        5 billion searches
                        300 new posts on laracasts
                        64.5k downloads of spatie
                        then there is alot of data => through APIs or in forms
                        the data pass between servers and users
                        Can not we trust our users?
                    -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label"
                                >Email address</label
                            >
                            <div class="col-md-6">
                                <!-- try user example@email as value it will submit the form -->
                                <input
                                    id="email"
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    pattern=".+@.+\..+"
                                    required
                                />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                for="password"
                                class="col-md-4 col-form-label"
                                >Password</label
                            >
                            <div class="col-md-6">
                                <input
                                    id="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password"
                                    autocomplete="current-password"
                                    required
                                />
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    SIGN IN
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">Register Form</div>
                <div class="card-body">
                    <form
                        method="POST"
                        action="{{ route('users.store') }}"
                        class="text-left"
                    >
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label"
                                >Name</label
                            >
                            <div class="col-md-6">
                                <input
                                    id="name"
                                    type="text"
                                    name="name"
                                    value=""
                                    required="required"
                                    autocomplete="name"
                                    autofocus="autofocus"
                                    class="form-control "
                                />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label"
                                >E-Mail Address</label
                            >
                            <div class="col-md-6">
                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value=""
                                    required="required"
                                    autocomplete="email"
                                    class="form-control "
                                />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                for="password"
                                class="col-md-4 col-form-label"
                                >Password</label
                            >
                            <div class="col-md-6">
                                <input
                                    id="password"
                                    type="password"
                                    name="password"
                                    required="required"
                                    autocomplete="new-password"
                                    class="form-control "
                                />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                for="password-confirm"
                                class="col-md-4 col-form-label"
                                >Confirm Password</label
                            >
                            <div class="col-md-6">
                                <input
                                    id="password-confirm"
                                    type="password"
                                    name="password_confirmation"
                                    required="required"
                                    autocomplete="new-password"
                                    class="form-control"
                                />
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
