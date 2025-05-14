<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
$username = $isLoggedIn ? htmlspecialchars($_SESSION['username']) : '';
?>

<?php include 'php/header.php'; ?> 

<p id="current-date" class="date"></p>

<!-- Main Content -->
<div id="main">
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

<?php include 'php/footer.php'; ?> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/modals.js"></script> 
<script src="js/date.js"></script>  
<?php include 'php/login_error_handler.php'; ?> 

