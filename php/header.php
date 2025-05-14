<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Movie World</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
  <!-- Font Awesome for social icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="js/date.js"></script> <!-- Include date.js in the header -->
</head>
<body>

<nav>
  <div id="navbarcontainer">
    <img class="logo" src="images/logo.png" alt="Movie World" width="160" height="50" />
    <ul style="text-align: center;">
      <li><a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) === 'index.php' ? 'active' : '' ?>">HOME</a></li>
      <li><a href="nowshowing.php" class="<?= basename($_SERVER['PHP_SELF']) === 'nowshowing.php' ? 'active' : '' ?>">NOW SHOWING</a></li>
      <li><a href="advanceticketselling.php" class="<?= basename($_SERVER['PHP_SELF']) === 'advanceticketselling.php' ? 'active' : '' ?>">ADVANCE TICKET SELLING</a></li>
      <li><a href="comingsoon.php" class="<?= basename($_SERVER['PHP_SELF']) === 'comingsoon.php' ? 'active' : '' ?>">COMING SOON</a></li>
      <li><a href="otherproducts.php" class="<?= basename($_SERVER['PHP_SELF']) === 'otherproducts.php' ? 'active' : '' ?>">OTHER PRODUCTS</a></li>
      <li><a href="bookingandevents.php" class="<?= basename($_SERVER['PHP_SELF']) === 'bookingandevents.php' ? 'active' : '' ?>">BOOKING AND EVENTS</a></li>
      <li><a href="contactus.php" class="<?= basename($_SERVER['PHP_SELF']) === 'contactus.php' ? 'active' : '' ?>">CONTACT US</a></li>

      <?php if ($isLoggedIn): ?>
        <li style="color:white; font-weight:bold;">Welcome, <?= $username ?></li>
        <li><a href="/movie-world/php/logout.php">LOGOUT</a></li>
      <?php else: ?>
        <li><a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">REGISTER</a></li>
        <li><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</a></li>
      <?php endif; ?>

      <li>
        <a href="https://www.facebook.com/melvinkentc" target="_blank" id="facebook">
          <i class="fa fa-facebook-square" style="font-size:24px; padding-right: 1px;"></i>
        </a>
      </li>
      <li>
        <a href="https://twitter.com/melvinkentc" target="_blank" id="twitter">
          <i class="fa fa-twitter-square" style="font-size:24px; padding-right: 1px;"></i>
        </a>
      </li>
    </ul>

    <!-- Hamburger Icon for Mobile -->
    <button class="icon" aria-label="Toggle menu">
      <i class="fa fa-bars"></i>
    </button>
  </div>
</nav>

<!-- Include Modals -->
<?php include 'php/modals.php'; ?>