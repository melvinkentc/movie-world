document.addEventListener("DOMContentLoaded", function() {
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