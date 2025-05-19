document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('contact-form');

  if (!form) return;

  form.addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent default form submission

    // Grab the form field values
    const name = form.querySelector('#name').value.trim();
    const email = form.querySelector('#email').value.trim();
    const phone = form.querySelector('#phone').value.trim();
    const message = form.querySelector('#message').value.trim();

    // Simple frontend validation
    if (!name || !email || !phone || !message) {
      const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
      errorModal.show();
      console.warn('Validation failed: Missing fields.');
      return;
    }

    // Prepare form data
    const formData = new FormData(form);

    // Send the data using fetch
    fetch(form.action, {
      method: 'POST',
      body: formData
    })
      .then(res => res.text())
      .then(response => {
        console.log("Server Response:", response); // Debugging line to inspect the server's response

        // Check for success or failure
        if (response.trim() === 'success') {
          const successModal = new bootstrap.Modal(document.getElementById('successModal'));
          successModal.show();
          form.reset(); // Clear form fields
        } else {
          throw new Error(response); // If not success, throw an error with the response
        }
      })
      .catch(err => {
        const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
        errorModal.show();
        console.error('Submission failed:', err);
      });
  });
});
