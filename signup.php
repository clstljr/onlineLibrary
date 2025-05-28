<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Libro - Sign Up</title>
  <link rel="stylesheet" href="assets/css/index.css"> <!-- Login-specific styles -->
  <link rel="stylesheet" href="assets/css/loginandsignup.css"> <!-- Combined styles -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

  <div class="headerContainer"> 
    <div class="logoTitleContainer">
          <img src="assets/images/logo.jpg" alt="Logo" class="logo">
          <header><h1>Libro</h1></header>
      </div>
      <div class="navContainer"> 
        <nav> 
          <ul> 
            <li><a href="index.php">Home</a></li> 
            <li><a href="about.php">About</a></li> 
            <li><a href="contact.php">Contact</a></li> 
          </ul> 
        </nav>
      </div>
  </div>

  <main>
    <section>
      <div class="login-container container mt-5">
          <h5 class="login-text mb-4 text-center text-white">Create your account</h5>
          <form action="process_signup.php" method="post" id="signupForm">
              <div class="row mb-3">
                  <div class="col">
                      <input type="text" name="first_name" class="form-control" placeholder="First name" required />
                  </div>
                  <div class="col">
                      <input type="text" name="last_name" class="form-control" placeholder="Last name" required />
                  </div>
              </div>
              <div class="mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email" required />
              </div>
              <div class="mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Password" required />
              </div>
              <div class="mb-3">
                  <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required />
              </div>
              <div class="mb-3">
                  <textarea name="address" class="form-control" placeholder="Address" rows="3" required></textarea>
              </div>
              <div class="mb-3">
                  <input type="text" name="phone" class="form-control" placeholder="Contact Number" required />
              </div>
              <div class="text-center mt-4">
                  <button type="submit" class="btn btn-custom w-100">Create Account</button>
              </div>
          </form>
          <div class="text-center mt-3">
              <p class="text-white">
                  Already have an account? <a href="login.php" class="text-decoration-underline text-white">Log in</a>
              </p>
          </div>
      </div>
    </section>
  </main>

  <?php include 'footer.php'; ?>
</body>
</html>
