<?php
include 'php/header.php'; // header already starts the session and sets $isLoggedIn/$username
?>
<!-- Main Content -->
<div id="main">
    <section>
      <h1 class="titles" style="text-align: center;">WHAT'S HAPPENING</h1>
</section>
    <section>
      <hr class="hr-shadow" />
      <h1 class="titles" style="text-align: center;">NOW SHOWING</h1>
      <div class="ticket"><p style="text-align: center;" title="click poster to buy ticket">click poster to buy ticket</p></div>
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
      <h1 class="titles" style="text-align: center;">ADVANCE TICKET SELLING</h1>
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
      <h1 class="titles" style="text-align: center;">COMING SOON</h1>
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
<?php include 'php/footer.php'; ?> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/modals.js"></script> 
<script src="js/date.js"></script>  
<?php include 'php/login_error_handler.php'; ?> 

