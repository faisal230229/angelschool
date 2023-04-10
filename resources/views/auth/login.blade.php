@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container mt-5 pt-2">
        <div class="row">
            <div
                class="col-12 my-md-0 my-5 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="card" id="sample-login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="">
                        </div>
                        <div class="card-header login-logo pt-5">
                            <h6 class="text-center text-dark">Welcome to <br> THE ANGELS SCHOOL SYSTEM
                                <br> (Khan Garh)
                            </h6>

                        </div>
                        <h6 class="text-center text-dark">Login Page</h6>
                        <div class="card-body pb-0">
                            <div class="form-group">
                                <label>Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                    </div>
                                    <input class="form-control" placeholder="Email" id="email" type="email" name="email"
                                        :value="old('email')" required autofocus autocomplete="username">
                                </div>
                            </div>
                            <div class=" form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                    </div>
                                    <input class="form-control" placeholder="Password" id="password" type="password"
                                        name="password" required autocomplete="current-password">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input"
                                        id="remember-me">
                                    <label class="custom-control-label" for="remember-me">Remember
                                        Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer  text-center">
                            <button type="submit" {{--
                                onclick="$.cardProgress('#sample-login', {dismiss: true,onDismiss: function() {alert('Dismissed :)')}});return false;"
                                --}} class="btn btn-primary px-5 ">Login</button>
                            {{-- <div class="my-3">
                                <a href="#" class=" ">Forget Password</a>
                            </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection