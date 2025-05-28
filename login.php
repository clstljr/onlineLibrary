<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Libro - Login</title>
  <link rel="stylesheet" href="assets/css/index.css"> <!-- Login-specific styles -->
  <link rel="stylesheet" href="assets/css/loginandsignup.css"> <!-- Login-specific styles -->
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
          <h5 class="login-text mb-4 text-center text-white">Log in to your account</h5>
          <form action="process_login.php" method="post" id="loginForm">
              <div class="mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email" required autofocus />
              </div>
              <div class="mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Password" required />
              </div>
              <div class="text-center mt-4">
                  <button type="submit" class="btn btn-custom w-100">Login</button>
              </div>
          </form>
          <div class="text-center mt-3">
              <p class="text-white">
                  Don't have an account? <a href="signup.php" class="text-decoration-underline text-white">Sign up here</a>
              </p>
          </div>
      </div>
    </section>
  </main>

  <?php include 'footer.php'; ?>
</body>
</html>
