<?php if (isset($_SESSION['login_error'])): ?>
<script>
  window.addEventListener('DOMContentLoaded', () => {
    const loginModalEl = document.getElementById('loginModal');
    if (loginModalEl) {
      const loginModal = new bootstrap.Modal(loginModalEl);
      loginModal.show();

      const errorMsg = document.getElementById('loginErrorMessage');
      if (errorMsg) {
        errorMsg.textContent = <?= json_encode($_SESSION['login_error']); ?>;
        errorMsg.style.display = 'block';
      }
    }
  });
</script>
<?php unset($_SESSION['login_error']); ?>
<?php endif; ?>