<?php
include 'php/header.php'; // header already starts the session and sets $isLoggedIn/$username
?>

<!-- Main Content -->
<div id="main">
  <section>
    <p class="titles" style="text-align: left; ">NOW SHOWING</p>
    <hr class="hr-shadow" />
    
    <!-- Add your dynamic or static movie listings below -->
    <div class="movie-grid">
      <div class="movie-card">
        <img src="images/amateur.gif" alt="Movie Poster">
        <h5>Sample Movie</h5>
        <p>Now in theaters!</p>
      </div>

      <!-- Duplicate or loop over this structure if loading dynamically -->
    </div>
  </section>
</div>

<?php include 'php/footer.php'; ?>
<script src="js/myscript.js"></script>
<script src="js/date.js"></script>
<script src="js/modals.js"></script>
<script src="js/cookie.js"></script>
<?php include 'php/login_error_handler.php'; ?>