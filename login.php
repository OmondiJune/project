<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <title>Document</title>
</head>
<body>
  <header class="header">
    <nav class="nav">
      <a href="#" class="nav-logo">Smart Parking System</a>
      <ul class="nav-items">
        <li class="nav-item">
          <a href="#" class="nav-link">Home</a>
          <a href="#" class="nav-link">Pay</a>
          <a href="#" class="nav-link">Contact Us</a>
          <a href="#" class="nav-link">Parking</a>
        </li>
      </ul>
      <button class="button" id="form-open">LOGIN</button>
    </nav>
  </header>
  <section class="home">
    <div class="form-container">
      <i class="uil uil-times-circle close_form"></i>
      <!-- Login Form -->
      <div class="form form-login">
        <form action="submit.php" method="POST">
          <h2>Login</h2>
          <div class="input-box">
            <input type="email" name="email" placeholder="Enter Email">
            <i class="uil uil-envelope-alt email"></i>
          </div>
          <div class="input-box">
            <input type="password" name="password" placeholder="Password">
            <i class="uil uil-padlock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>
          <div class="option-field">
            <span class="check-box">
              <input type="checkbox" id="check"/>
              <label for="check">Remember me</label>
            </span>
            <a href="#" class="forget-pwd">Forgot Password?</a>
          </div>
          <button class="button" name="login">LOGIN</button>
          <div class="account">
            Don't have an Account?<a href="#" id="signup">SignUp</a>
          </div>
        </form>
      </div>
      <!-- Sign Up form -->
      <div class="form form-signup">
        <form action="submit.php" method="POST">
          <h2>Sign Up</h2>
          <div class="input-box">
            <input type="email" name="email" placeholder="Enter Email">
            <i class="uil uil-envelope-alt email"></i>
          </div>
          <div class="input-box">
            <input type="password" name="password" placeholder="Password">
            <i class="uil uil-padlock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>
          <div class="input-box">
            <input type="password" name="confirm_password" placeholder="Confirm Password">
            <i class="uil uil-padlock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>
          <button class="button" name="signup">SIGN UP</button>
          <div class="account">
            Already have an Account?<a href="#" id="login">SignIn</a>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script src="./js/source.js"></script>
</body>
</html>
