<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/8e32f6f0ce.js" crossorigin="anonymous"></script>
  <title>Sign in Sign Up</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" class="sign-in-form">
          <h2 class="tittle">Sign In</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password">
          </div>
          <input type="submit" value="Login" class="btn">

          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-google"><i class="fab fa-google"></i></a>
          </div>
        </form>

        <form action="" class="sign-up-form">
          <h2 class="tittle">Sign Up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username">
          </div>

          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email">
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password">
          </div>
          <input type="submit" value="Login" class="btn">

          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-google"><i class="fab fa-google"></i></a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Login Form</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            doloribus blanditiis id numquam commodi </p>
          <button class="btn transparent" id="sign-up-btn">Sign Up</button>
          <!-- <a href="index.html" class="btn transparent" id="sign-up-btn">Home</a> -->
        </div>

        <img src="img/rocket.svg" class="image" alt="">
      </div>

      <div class="panel right-panel">
        <div class="content">
          <h3>Sign up now!</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            doloribus ablanditiis id numquam commodi </p>
          <button class="btn transparent" id="sign-in-btn">Sign In</button>
        </div>

        <img src="img/undraw_laravel_and_vue_-59-tp.svg" class="image" alt="">
      </div>
    </div>
  </div>

  <script src="js/app.js"></script>
</body>

</html>