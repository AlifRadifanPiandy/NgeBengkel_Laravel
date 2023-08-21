{{-- Register Page --}}
@extends('auth.auth_layout')

{{-- Title Section --}}
@section('title')
    Register Page
@endsection

{{-- Content Section --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="regis">
                    <h1>Gear up for Repair</h1>
                    <h4>Welcome to Ngebengkel! Please complete the form to register.</h4>
                    <form action="" method="post">
                        @csrf
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" id="fullname" name="fullname"
                                placeholder="Enter your Full Name">
                            <input type="hidden" class="d-none" name="role_id" value="2">
                        </div>
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Enter your username">
                        </div>
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" id="no_telepon" name="no_hp"
                                placeholder="Enter your number telephone">
                        </div>
                        <div class="input-group mb-3">
                            <input name="password" type="password" value="" class="form-control" id="password"
                                placeholder="Password" required="true">
                            <span class="input-group-text" onclick="togglePasswordVisibility();">
                                <i class="fas fa-eye" id="show_eye"></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                            </span>
                        </div>
                        <div class="input-group mb-3">
                            <input name="password_confirmation" type="password" value="" class="form-control"
                                id="password_confirmation" placeholder="Confirm Password" required="true">
                            <span class="input-group-text" onclick="confirmpasswordVisibility();">
                                <i class="fas fa-eye" id="show_eye"></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                            </span>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block w-100">Register</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Login</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="dua col-lg-6 col-md-8 col-sm-10 ">
                <img src="{{ asset('images/illustration_login.png') }}" alt="login" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
{{-- To show / hide password --}}
@section('scripts')
    <script>
        function togglePasswordVisibility() {
            let passwordInput = document.getElementById('password');
            let passwordS = document.getElementById('confirmpassword');
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

        function confirmpasswordVisibility() {
            let passwordS = document.getElementById('password_confirmation');
            let passwordIcon = document.getElementById('password-icon');

            if (passwordS.type === 'password') {
                passwordS.type = 'text';
                passwordIcon.classList.remove('fa-eye-slash');
                passwordIcon.classList.add('fa-eye');
            } else {
                passwordS.type = 'password';
                passwordIcon.classList.remove('fa-eye');
                passwordIcon.classList.add('fa-eye-slash');
            }
        }
    </script>
@endsection
