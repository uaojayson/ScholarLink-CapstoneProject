

<div class="container login-container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="#" class="sign-in-form">
          <a
            class="navbar-brand mx-4"
            href="http://127.0.0.1:5500/index.html"
          >
            <img src="/assets/logo.png" style="height: 80px" alt="owl" />
          </a>
          <h2 class="title">LOGIN</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" />
          </div>
          <div class="role-field">
            <label for="login-type">Login as:</label>
            <select id="login-type" name="login-type">
              <option value="student">Student</option>
              <option value="mentor">Mentor</option>
              <option value="affiliate">Affiliate</option>
            </select>
          </div>
          <input type="submit" value="Login" class="btn solid" />
          <p class="social-text">Or Login with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <form action="#" class="sign-up-form">
          <a
            class="navbar-brand mx-4"
            href="http://127.0.0.1:5500/index.html"
          >
            <img src="/assets/logo.png" style="height: 80px" alt="owl" />
          </a>
          <h2 class="title">Sign Up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" />
          </div>
          <input type="submit" class="btn" value="Sign up" />
          <p class="social-text">Or Sign Up With Social Platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New to ScholarLink?</h3>
          <p>Get started on your academic journey today.</p>
          <button class="btn transparent" id="sign-up-btn">Sign Up</button>
        </div>
        <img src="/assets/login.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Already have an account?</h3>
          <p>Welcome back, let's continue your journey!</p>
          <button class="btn transparent" id="sign-in-btn">Login</button>
        </div>
        <img src="/assets/signup.svg" class="image" alt="" />
      </div>
    </div>
  </div>