@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login Form</div>
                <div class="card-body">
                    <login-component></login-component>
                </div>
            </div>
            {{--
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
            --}}
        </div>
    </div>
</div>

@endsection @section ('scripts')
<script src="js/my_script.js" defer></script>
@endsection
