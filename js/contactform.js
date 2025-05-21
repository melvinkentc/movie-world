document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("contact-form");

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    // Get form values
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const message = document.getElementById("message").value.trim();

    // Basic client-side validation
    let isValid = true;

    // Clear all previous error messages
    document.querySelectorAll(".error-msg").forEach((el) => (el.style.display = "none"));

    if (!name) {
      document.getElementById("name-error").style.display = "block";
      isValid = false;
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      document.getElementById("email-error").style.display = "block";
      isValid = false;
    }

    if (!/^09\d{9}$/.test(phone)) {
      document.getElementById("phone-error").style.display = "block";
      isValid = false;
    }

    if (!message) {
      document.getElementById("message-error").style.display = "block";
      isValid = false;
    }

    if (!isValid) return;

    // Submit via AJAX
    try {
      const formData = new FormData(form);
      const response = await fetch("php/contactform_submit.php", {
        method: "POST",
        body: formData,
      });

      const result = await response.json();

      if (result.status === "success") {
        // Show success modal
        const successModal = new bootstrap.Modal(document.getElementById("successModal"));
        successModal.show();
        form.reset();

        // When modal hidden, remove backdrop and restore scrolling
        document.getElementById("successModal").addEventListener("hidden.bs.modal", () => {
          removeModalBackdrop();
        }, { once: true });

      } else {
        // Show error modal
        const errorModal = new bootstrap.Modal(document.getElementById("errorModal"));
        errorModal.show();

        document.getElementById("errorModal").addEventListener("hidden.bs.modal", () => {
          removeModalBackdrop();
        }, { once: true });
      }
    } catch (error) {
      // Show error modal
      const errorModal = new bootstrap.Modal(document.getElementById("errorModal"));
      errorModal.show();

      document.getElementById("errorModal").addEventListener("hidden.bs.modal", () => {
        removeModalBackdrop();
      }, { once: true });

      console.error("Form submission error:", error);
    }
  });

  // Helper to remove leftover modal backdrop and restore scrolling
  function removeModalBackdrop() {
    const backdrop = document.querySelector(".modal-backdrop");
    if (backdrop) {
      backdrop.parentNode.removeChild(backdrop);
    }
    document.body.classList.remove("modal-open");
  }
});
