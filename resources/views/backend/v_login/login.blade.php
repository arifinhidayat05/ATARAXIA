<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" href="{{asset('backend\css_login\style2.css')}}">
    <link rel="icon" type="image/jpeg" href="{{ asset('backend/img/logo.jpg') }}">
</head>

<body>
    <div class="box">
        <span class="borderline"></span>
        <form action="{{ route('backend.login') }}" method="post">
            @csrf
            <h2>LOGIN</h2>
            <div class="inputbox">
                <input type="email" class="input" id="" value="{{old('email')}}" name="email" required>
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="password" class="input" id="" value="{{old('password')}}" name="password" required>
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">forgot passsword</a>
                <a href="#">signup</a>
            </div>
            <input type="submit" class="btn" value="login">
        </form>
    </div>
</body>

</html>