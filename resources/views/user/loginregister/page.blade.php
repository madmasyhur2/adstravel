@extends('user.loginregister.layout.main')

@section('title', 'Login Register')

@section('content')
<div>
    <div class="container" id="container">
        <div class="form-container register-container">
            <form action="/register" method="post">
                @csrf
                <h1>Register here.</h1>
                <input type="text" placeholder="Name" name="name">
                <input type="email" placeholder="email" name="email">
                <input type="number" placeholder="phone number" name="phone_number">
                <div class="fieldPassword">
                    <input type="password" placeholder="Password" name="password" id="passwordRegister">
                    <a id="showPasswordRegister"></a>
                </div>
                <button type="submit">Register</button>
                <span>or use your account</span>
                <div class="social-container">
                    <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
                    <a href="#" class="social"><i class="lni lni-google"></i></a>
                    <a href="#" class="social"><i class="lni lni-linkedin-original"></i></a>
                </div>
            </form>
        </div>

        <div class="form-container login-container">
            <form action="/login" method="post">
                @csrf
                <h1>Login here.</h1>
                <input type="email" placeholder="Email" name="email">
                <div class="fieldPassword">
                    <input type="password" placeholder="Password" name="password" id="passwordLogin">
                    <a id="showPasswordLogin"></a>
                </div>
                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label>Remember me</label>
                    </div>
                    <div class="pass-link">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>
                <button>Login</button>
                <span>or use your account</span>
                <div class="social-container">
                    <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
                    <a href="#" class="social"><i class="lni lni-google"></i></a>
                    <a href="#" class="social"><i class="lni lni-linkedin-original"></i></a>
                </div>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="title">Hello <br> friends</h1>
                    <p>if you have an account, login here and have fun</p>
                    <button class="ghost" id="login">Login
                        <i class="lni lni-arrow-left login"></i>
                    </button>
                </div>
                
                <div class="overlay-panel overlay-right">
                    <h1 class="title">Start your <br> journey now</h1>
                    <p>if you don't have an account yet, join us and start your journey</p>
                    <button class="ghost" id="register">Register
                        <i class="lni lni-arrow-right register"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection