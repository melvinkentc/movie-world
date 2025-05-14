<?php
// scripts.php: Contains the JavaScript logic for modals and session-based actions
?>

<!-- Auto-open Login Modal if there's a login error -->
<?php if (isset($_SESSION['login_error_shown'])): ?>
<script>
  const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
  loginModal.show();
</script>
<?php unset($_SESSION['login_error_shown']); endif; ?>

<!-- Scripts to disable modals if logged in -->
<script>
  <?php if ($isLoggedIn): ?>
    const registerBtn = document.querySelector('a[data-bs-target="#registerModal"]');
    const loginBtn = document.querySelector('a[data-bs-target="#loginModal"]');
    if (registerBtn) registerBtn.setAttribute('data-bs-toggle', '');
    if (loginBtn) loginBtn.setAttribute('data-bs-toggle', '');
  <?php endif; ?>
</script>
