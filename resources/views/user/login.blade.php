<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @include('components.header')
</head>
<body>
    <div class='container-login' >
        <div class="login-img">
            <img src="{{ asset('assets/img/arsip.png') }}" alt="">
            <h2 class="title-signin" >Welcome</h2>
        </div>
        <div class="login-form">
            <form action=""> 
                <div class="txt_field">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Enter Your Email" required>
                    <span></span>
                </div>
                <div class="txt_field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter Your Password" required>
                    <span></span>
                </div>
                <div class="pass"><a href="">Forgot your account ?</a></div>
                <input type="submit" value="Sign In" name="signin" class="submit">
                <div class="signin-email">
                    <input type="submit" value="Sign In With Email" name="signin-email" class="submit email">
                    <p>Don't have account yet ? <a href="">Register</a></p>
                </div>
            </form>
        </div>
    </div>

    @include('components.footer')
</body>
</html>