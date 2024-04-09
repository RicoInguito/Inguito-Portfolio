<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assetlogin/login.css">
    <link rel="stylesheet" href="assetlogin/login.js">
</head>
<body>
    
</body>
</html>
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title register">Register Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="register">
          <label for="login" class="slide login">Login</label>
          <label for="register" class="slide register">Register</label>
          <div class="slider-tab"></div>
        </div>  
        <div class="form-inner">
          <form action="{{route('login')}}" class="login" method="POST">
          @csrf
            <div class="field">
              <input type="text" placeholder="Email Address" name="email" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="pass-link"><a href="#">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login" >
            </div>

            
            <div class="register-link">Not a member? <a href="#">Register now</a></div>
          </form>
          <form action="{{route('register')}}" class="Register">
            <div class="field">
              <input type="text" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Confirm password" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Register">
            </div>
          </form>
        </div>
      </div>
    </div>
