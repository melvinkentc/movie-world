<?php
session_start(); // Start the session to access session variables

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['username']);
$username = $isLoggedIn ? htmlspecialchars($_SESSION['username']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Movie World</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/date.js"></script>
</head>
<body>

<!-- Navigation Bar -->
<nav>
  <div id="navbarcontainer">
    <img class="logo" src="images/logo.png" alt="Movie World" width="160" height="50" />
    <ul style="text-align: center;">
      <li><a href="index.php" class="active">HOME</a></li>
      <li><a href="nowshowing.html">NOW SHOWING</a></li>
      <li><a href="advanceticketselling.html">ADVANCE TICKET SELLING</a></li>
      <li><a href="comingsoon.html">COMING SOON</a></li>
      <li><a href="otherproducts.html">OTHER PRODUCTS</a></li>
      <li><a href="bookingandevents.html">BOOKING AND EVENTS</a></li>
      <li><a href="contactus.html">CONTACT US</a></li>
      <?php if ($isLoggedIn): ?>
        <li style="color:white; font-weight:bold;">Welcome, <?= $username ?></li>
        <li><a href="/movie-world/php/logout.php">LOGOUT</a></li>
      <?php else: ?>
        <li><a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">REGISTER</a></li>
        <li><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</a></li>
      <?php endif; ?>
      <li>
        <a href="https://www.facebook.com/melvinkentc" target="_blank" id="facebook">
          <i class="fa fa-facebook-square" style="font-size:24px;"></i>
        </a>
      </li>
      <li>
        <a href="https://twitter.com/melvinkentc" target="_blank" id="twitter">
          <i class="fa fa-twitter-square" style="font-size:24px;"></i>
        </a>
      </li>
    </ul>
    <button class="icon" aria-label="Toggle menu">
      <i class="fa fa-bars"></i>
    </button>
  </div>
</nav>

<p id="current-date" class="date"></p>

<!-- Main Content -->
<div id="main">

  <!-- Register Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Register</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="php/register.php">
            <div class="mb-3">
              <label class="form-label">Fullname</label>
              <input type="text" name="fullname" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Login Modal -->
  <div class="modal fade <?php if (isset($_SESSION['login_error'])) echo 'show'; ?>" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" style="<?php if (isset($_SESSION['login_error'])) echo 'display: block; background-color: rgba(0,0,0,0.5);'; ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <!-- Login Error Display -->
          <?php if (isset($_SESSION['login_error'])): ?>
            <div class="alert alert-danger"><?= $_SESSION['login_error']; ?></div>
            <?php unset($_SESSION['login_error']); ?>
          <?php endif; ?>
          <form method="post" action="php/login.php">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Example Movie Section -->
  <section>
    <h1 class="shadow-title" style="text-align: center;">NOW SHOWING</h1>
    <div class="slider-container hover-slider">
      <div class="slider-track">
        <a href="#"><img src="images/amateur.gif" alt="1"></a>
      </div>
      <div class="dots">
        <span class="dot active" data-index="0"></span>
      </div>
    </div>
  </section>

</div>

<!-- Footer -->
<footer>
  <div class="footer">
    <p>
      Movie World &copy; 2025<br />
      <div class="footer-nav">
        <a href="index.php">Home</a>
        <a href="nowshowing.html">Now Showing</a>
        <a href="advanceticketselling.html">Advance Ticket Selling</a>
        <a href="comingsoon.html">Coming Soon</a>
        <a href="termsandcondition.html">Terms and Conditions</a>
        <a href="FAQs.html">FAQs</a>
        <a href="policy.html">Privacy and Policy</a>
      </div><br />
      &reg; and &copy; Movie World. All rights reserved.
    </p>
  </div>
</footer>

<div id="cookie-popup" class="cookie-popup">
  <p>WE USE COOKIES!</p><br />
  <p>By continuing to use the website, you agree to our <a href="policy.html">Privacy Policy</a>,
  <a href="termsandcondition.html">Terms</a> and <a href="policy.html">Use of Cookies</a></p>
  <button id="accept-cookies">Got it!</button>
</div>

<!-- Bootstrap + Custom Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/myscript.js"></script>
<script src="js/cookie.js"></script>

<!-- Auto-open Login Modal if there's a login error -->
<?php if (isset($_SESSION['login_error_shown'])): ?>
<script>
  const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
  loginModal.show();
</script>
<?php unset($_SESSION['login_error_shown']); endif; ?>

<!-- Hide Modals if Logged In -->
<script>
  <?php if ($isLoggedIn): ?>
    const registerBtn = document.querySelector('a[data-bs-target="#registerModal"]');
    const loginBtn = document.querySelector('a[data-bs-target="#loginModal"]');
    
    if (registerBtn) registerBtn.setAttribute('data-bs-dismiss', 'modal');
    if (loginBtn) loginBtn.setAttribute('data-bs-dismiss', 'modal');
  <?php endif; ?>
</script>
<?php if (isset($_SESSION['login_error_shown'])): ?>
<script>
  const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
  loginModal.show();
</script>
<?php unset($_SESSION['login_error_shown']); endif; ?>
</body>
</html>