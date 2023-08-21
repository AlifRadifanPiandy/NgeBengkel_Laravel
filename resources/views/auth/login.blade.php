{{-- Login Page --}}
@extends('auth.auth_layout')

{{-- Title Section --}}
@section('title')
    Login Page
@endsection

{{-- Content Section --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-10 satu">
                <h1>Login to your Account</h1>
                <h4>Welcome back! Please complete the form to login.</h4>
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="" method="post">
                    @csrf
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Enter your username">
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" value="" class="form-control" id="password"
                            placeholder="password" required="true">
                        <span class="input-group-text" onclick="togglePasswordVisibility();">
                            <i class="fas fa-eye" id="show_eye"></i>
                            <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block w-100">Login</button>
                </form>
                <div class="text-center mt-3">
                    <p>Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none">Register
                            now</a></p>
                </div>
            </div>
            <div class="dua col-lg-6 col-md-8 col-sm-10 ">
                <img src="{{ asset('images/illustration_login.png') }}" alt="login" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function togglePasswordVisibility() {
            let passwordInput = document.getElementById('password');
            let passwordIcon = document.getElementById('password-icon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.classList.remove('fa-eye-slash');
                passwordIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                passwordIcon.classList.remove('fa-eye');
                passwordIcon.classList.add('fa-eye-slash');
            }
        }
    </script>
@endsection
