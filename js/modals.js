document.addEventListener("DOMContentLoaded", function () {
  // Show logout success toast if flagged
  if (window.logoutSuccess) {
    const toastEl = document.getElementById('logoutToast');
    const container = document.getElementById('alert-container');

    if (toastEl) {
      // Ensure container is displayed when the toast is shown
      if (container) {
        container.style.display = 'block'; // Only show the container when needed
      }

      const toast = new bootstrap.Toast(toastEl, { delay: 5000 });

      toast.show();

      // Cleanup the container after the toast is dismissed
      toastEl.addEventListener('hidden.bs.toast', function () {
        if (container) {
          container.style.display = 'none'; // Hide the container when the toast is gone
        }
      });
    }
  }

  // Auto-open Login Modal if there's a login error
  if (window.loginError) {
    const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
    loginModal.show();
  }

  // Disable modal buttons if user is logged in
  if (window.isLoggedIn) {
    const registerBtn = document.querySelector('a[data-bs-target="#registerModal"]');
    const loginBtn = document.querySelector('a[data-bs-target="#loginModal"]');
    if (registerBtn) registerBtn.removeAttribute('data-bs-toggle');
    if (loginBtn) loginBtn.removeAttribute('data-bs-toggle');
  }
});