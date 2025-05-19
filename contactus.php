<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
$username = $isLoggedIn ? htmlspecialchars($_SESSION['username']) : '';
?>

<?php include 'php/header.php'; ?>

<!-- Main Content -->
<div id="main">
  <section>
    <div class="contactus">
      <h1 style="text-align: left; font-size: 40px; font-weight: bold;">Contact Us</h1>
    </div>
    <hr class="hr-shadow" />

    <p class="contactusfilled">Please fill out the required fields</p>

    <form id="contact-form" action="php/contactform_submit.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your full name" required />
        <small id="name-error" class="error-msg">Name is required.</small>
      </div>

      <div class="form-group">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Your email address" required />
        <small id="email-error" class="error-msg">Please enter a valid email address.</small>
      </div>

      <div class="form-group">
        <label for="phone">Contact Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="e.g., 09123456789" required />
        <small id="phone-error" class="error-msg">Please enter a valid contact number.</small>
      </div>

      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Your message..." required></textarea>
        <small id="message-error" class="error-msg">Message cannot be empty.</small>
      </div>

      <button type="submit" class="send-btn">Send Message</button>
    </form>
  </section>
</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center p-4">
      <div class="modal-header border-0">
        <h5 class="modal-title w-100" id="successModalLabel">Thank You!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <i class="fa fa-check-circle" style="font-size: 48px; color: #28a745;"></i>
        <p class="mt-3 mb-0">Your message has been sent successfully.</p>
      </div>
    </div>
  </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center p-4">
      <div class="modal-header border-0">
        <h5 class="modal-title w-100" id="errorModalLabel">Submission Error</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <i class="fa fa-exclamation-triangle" style="font-size: 48px; color: #dc3545;"></i>
        <p class="mt-3 mb-0">There was an issue submitting your message. Please try again.</p>
      </div>
    </div>
  </div>
</div>

<?php include 'php/footer.php'; ?>

<script src="js/modals.js"></script>
<script src="js/date.js"></script>
<script src="js/contactform.js"></script>
<?php include 'php/login_error_handler.php'; ?>