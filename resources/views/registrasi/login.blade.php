@extends('registrasi.app')
@section('title', 'Sign In')
@section('login')
    <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="auth-form-transparent text-start p-3">
            <div class="brand-logo">
                <h1>Sign In</h1>
            </div>
            <h4>Welcome back!</h4>
            <h6 class="font-weight-light">Happy to see you again!</h6>
            <form action="{{ url('proseslogin') }}" method="post" class="pt-3">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <span class="input-group-text bg-transparent border-right-0">
                                <i class="mdi mdi-email-outline text-primary py-1"></i>
                            </span>
                        </div>
                        <input type="email" name="email" class="form-control form-control-sm border-left-0"
                            id="" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <span class="input-group-text bg-transparent border-right-0">
                                <i class="mdi mdi-lock-outline text-primary py-1"></i>
                            </span>
                        </div>
                        <input type="password" name="password" class="form-control form-control-sm border-left-0"
                            id="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <label class="form-check-label text-muted">
                            <input type="checkbox" class="form-check-input" onclick="myFunction()"> Show
                            Password
                        </label>
                    </div>
                </div>
                <div class="my-3">
                    <button type="submit"
                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                </div>
            </form>
            <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="{{ url('registrasi') }}"
                    class="text-primary">Create</a>
            </div>
        </div>
    </div>
@endsection
