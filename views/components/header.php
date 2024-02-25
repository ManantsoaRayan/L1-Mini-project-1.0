<?php

function getClassImage($value)
{
  switch ($value) {
    case '/':
      echo 'header_home';
      break;
    case '/about':
      echo 'header_about';
      break;
    case '/offer':
      echo 'header_offers';
      break;
    case '/login':
      echo 'header_home';
  }
}

?>

<header class="<?php getClassImage($_SERVER['REQUEST_URI']) ?>">
  <div class="web-hero 
    
  ">
    <?php if (isUrl('/')) : ?>
      <div class="web-hero__top-section">
        <h1>Welcome to <span>Co-Delivery</span></h1>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, beatae et.
          Iusto possimus eos delectus doloremque quasi, optio culpa quaerat.
        </p>
        <div>
          <a href="/login">Sign Up</a>
        </div>
      </div>
      <div class="web-hero__bottom-section" id="heroImage"></div>
    <?php elseif (isUrl('/about')) : ?>
      <section class="web-hero__top-section">
        <h1>CONSULTING SERVICE FOR ALL</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
          aspernatur repellat minus quam, vitae, dolores distinctio odit
          impedit, repellendus ea tenetur? Repudiandae libero molestiae at a
          nam soluta mollitia earum.
        </p>
      </section>

    <?php elseif (isUrl('/offer')) : ?>
      <section class="web-hero__top-section">
        <h1>Consult our offer for all</h1>
        <h1>Kind of Business</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum eos expedita illum blanditiis similique repellat?</p>
      </section>

    <?php elseif (isUrl('/login')) : ?>
      <div class="wrapper">
        <div class="form-box login">
          <h2>Login</h2>
          <form action="#">
            <div class="input-box">
              <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg></span>
              <input type="email" required>
              <label>Email</label>
            </div>
            <div class="input-box">
              <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg></span>
              <input type="password" required>
              <label>Password</label>
            </div>
            <div class="remember-forgot">
              <label><input type="checkbox">Remember Me</label>
              <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="login-register">
              <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
            </div>
          </form>
        </div>

        <div class="form-box register">
          <h2>Registration</h2>
          <form action="#">
            <div class="input-box">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </span>
              <input type="text" required>
              <label>Username</label>
            </div>
            <div class="input-box">
              <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg></span>
              <input type="email" required>
              <label>Email</label>
            </div>
            <div class="input-box">
              <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg></span>
              <input type="password" required>
              <label>Password</label>
            </div>
            <div class="remember-forgot">
              <label><input type="checkbox">I agree to the terms & conditions</label>

            </div>
            <button type="submit" class="btn">Register</button>
            <div class="login-register">
              <p>Already have an account? <a href="#" class="login-link">Login</a></p>
            </div>
          </form>

        </div>
      </div>

    <?php endif; ?>
  </div>
</header>