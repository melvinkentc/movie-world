<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content white-shadow">
      <div class="modal-header">
        <h5 class="modal-title">SIGN UP</h5>
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
            <button type="submit" class="btn btn-custom-red">Sign up</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content white-shadow">
      <div class="modal-header">
        <h5 class="modal-title">LOGIN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <!-- Error container (dynamically filled and shown by JS) -->
        <div id="loginErrorMessage" class="alert alert-danger" style="display: none;"></div>

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
            <button type="submit" class="btn btn-custom-red">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Script to auto-open login modal if there's a login error -->
<?php if (isset($_SESSION['login_error'])): ?>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
    loginModal.show();
    const errorMessage = document.getElementById('loginErrorMessage');
    errorMessage.textContent = <?= json_encode($_SESSION['login_error']) ?>;
    errorMessage.style.display = 'block';
  });
</script>
<?php unset($_SESSION['login_error']); endif; ?>
