<?php
include 'php/header.php'; // header already starts the session and sets $isLoggedIn/$username
?>

<div id="main">
  <section>
      <p class="titles"style="text-align: left;">coming soon</p>
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


<!-- Include Modals -->
<?php include 'php/modals.php'; ?>

<!-- Include Footer -->
<?php include 'php/footer.php'; ?>

<!-- Custom Scripts -->
<script src="js/myscript.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<script src="js/modals.js"></script>
<script src="js/date.js"></script>
<script src="js/contactform.js"></script>
<?php include 'php/login_error_handler.php'; ?>