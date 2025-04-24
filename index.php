<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Movie World</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <!-- jQuery and Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-0o8e1c4a2b7f3d6e4c8f8a2b7f3d6e4c8f8a2b7f3d6e4c8f8a2b7f3d6e4c8" crossorigin="anonymous"></script> -->

  <!-- Custom Scripts -->
  <script src="js/date.js"></script>
</head>

<body>
  <div id="main">
    <nav>
      <div id="navbarcontainer">
        <img class="logo" src="images/logo.png" alt="Movie World" width="160" height="50" />
        <ul>
          <li><a href="#home" class="active">Home</a></li>
          <li><a href="#nowshowing" target="_blank">Now Showing</a></li>
          <li><a href="#comingsoon">Coming Soon</a></li>
          <li><a href="#otherproducts">Other Products</a></li>
          <li><a href="#bookingandevents">Booking and Events</a></li>
          <li><a href="#contactus">Contact Us</a></li>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a></li>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
          <li>
            <a href="https://www.facebook.com/melvinkentc" target="_blank" id="facebook">
              <i class="fa fa-facebook-square" style="font-size:24px; padding-right: 1px;"></i> Facebook
            </a>
          </li>
          <li>
            <a href="https://twitter.com/melvinkentc" target="_blank" id="twitter">
              <i class="fa fa-twitter-square" style="font-size:24px; padding-right: 1px;"></i> Twitter
            </a>
          </li>
        </ul>
        <button class="icon" aria-label="Toggle menu">
          <i class="fa fa-bars"></i>
        </button>
      </div>
    </nav>
    <p id="current-date" style="font-size: small;"></p>
    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="registerModalLabel">Register</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="php/register.php">
              <div class="mb-3">
                <label class="form-label">Fullname</label>
                <input type="text" name="fullname" class="form-control" placeholder="Fullname" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
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
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="php/login.php">
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
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
    <!-- Now Showing -->
    <section>
      <h1 class="shadow-title" style="text-align: center;">Now Showing</h1>
      <div class="slider-container hover-slider">
        <div class="slider-track">
          <!-- Repeat these as needed -->
          <a href="#"><img src="images/amateur.gif" alt="1"></a>
          <!-- ... -->
        </div>
        <div class="dots">
          <!-- Dynamic dots based on number of slides -->
          <span class="dot active" data-index="0"></span>
          <!-- ... -->
        </div>
      </div>
    </section>

    <hr class="hr-shadow" />

    <!-- Advance Ticket Selling -->
    <section>
      <h1 class="shadow-title" style="text-align: center;">Advance Ticket Selling</h1>
      <div class="slider-container hover-slider">
        <div class="slider-track">
          <!-- Repeat slides -->
          <a href="#"><img src="images/amateur.gif" alt="1"></a>
          <!-- ... -->
        </div>
        <div class="dots">
          <span class="dot active" data-index="0"></span>
          <!-- ... -->
        </div>
      </div>
    </section>

    <hr class="hr-shadow" />

    <!-- Coming Soon -->
    <section>
      <h1 class="shadow-title" style="text-align: center;">Coming Soon</h1>
      <div class="slider-container hover-slider">
        <div class="slider-track">
          <a href="#"><img src="images/amateur.gif" alt="1"></a>
          <!-- ... -->
        </div>
        <div class="dots">
          <span class="dot active" data-index="0"></span>
          <!-- ... -->
        </div>
      </div>
    </section>
  </div>

  <script src="js/myscript.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  <footer>
    <div class="footer">
      <p>Movie World &copy; 2025</p>
      <p style="font-size: small;">
        Trademark and Copyright Notice:
        &reg; and &copy; Movie World and its related entities. All rights reserved.
        Use of this Website assumes acceptance of Terms of Use and Privacy Policy.
      </p>
    </div>
  </footer>
</body>

</html>