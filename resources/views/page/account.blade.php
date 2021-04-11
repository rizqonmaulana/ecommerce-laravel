@extends('master_front')

@section('content')
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="{{ asset('assets/images/image1.png') }}" alt="image1" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="indicator">
                     </div>

                     <form id="loginForm">
                         <input type="text" placeholder="Username">
                         <input type="password" placeholder="Password">
                         <button type="submit" class="btn">Login</button>
                         <a href="">Forgot Password</a>
                     </form>

                     <form id="registerForm">
                         <input type="text" placeholder="Username">
                         <input type="email" placeholder="Email">
                         <input type="password" placeholder="Password">
                         <button type="submit" class="btn">Register</button>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
