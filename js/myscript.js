(function(d) {
  'use strict';
  const icon = d.querySelector('.icon');
  const theBody = d.querySelector('body');
  const menu = d.querySelector('.menu');

  if (icon && theBody) {
    icon.addEventListener('click', function(event) {
      event.stopPropagation();
      theBody.classList.toggle('menu-open');
    });

    if (menu) {
      menu.addEventListener('click', function(event) {
        event.stopPropagation();
      });
    }

    document.addEventListener('click', function() {
      theBody.classList.remove('menu-open');
    });
  }
})(document);

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".hover-slider").forEach(slider => {
    const track = slider.querySelector(".slider-track");
    const dots = slider.querySelectorAll(".dot");
    const slides = Array.from(slider.querySelectorAll(".slider-track a"));
    const slideCount = slides.length;
    const visibleSlides = 4;
    const slideWidth = 220; // Adjust based on your layout
    let currentIndex = 0;
    let hoverInterval;

    // Clone first few slides and append them
    for (let i = 0; i < visibleSlides; i++) {
      const clone = slides[i].cloneNode(true);
      track.appendChild(clone);
    }

    // Update total slide count after cloning
    const totalSlides = slideCount + visibleSlides;

    function goToIndex(index, instant = false) {
      track.style.transition = instant ? "none" : "transform 0.5s ease-in-out";
      track.style.transform = `translateX(-${index * slideWidth}px)`;

      // Update dots (wrap index to original slides only)
      dots.forEach(dot => dot.classList.remove("active"));
      if (dots[index % slideCount]) dots[index % slideCount].classList.add("active");

      currentIndex = index;
    }

    function startAutoSlide() {
      hoverInterval = setInterval(() => {
        currentIndex++;
        goToIndex(currentIndex);

        // When reaching the clone slides, jump instantly to real start
        if (currentIndex >= slideCount) {
          setTimeout(() => {
            goToIndex(0, true); // instantly jump
          }, 500); // match transition duration
          currentIndex = 0;
        }
      }, 3000);
    }

    function stopAutoSlide() {
      clearInterval(hoverInterval);
    }

    // Dot navigation
    dots.forEach(dot => {
      dot.addEventListener("click", function () {
        const index = parseInt(this.dataset.index);
        goToIndex(index);
        currentIndex = index;
      });
    });

    slider.addEventListener("mouseenter", startAutoSlide);
    slider.addEventListener("mouseleave", stopAutoSlide);

    // Start auto slide
   //  startAutoSlide();
  });
});
  const currentPage = window.location.pathname.split("/").pop();

  // Get all nav links
  const navLinks = document.querySelectorAll("nav ul li a");

  // Loop through links to find and add 'active'
  navLinks.forEach(link => {
    const linkPage = link.getAttribute("href");
    if (linkPage === currentPage) {
      link.classList.add("active");
    }
  });
  //This is for contactus.html
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
      const response = await fetch("php/contact.php", {
        method: "POST",
        body: formData,
      });

      const result = await response.text();

      if (result.trim() === "success") {
        // Show success modal
        const successModal = new bootstrap.Modal(document.getElementById("successModal"));
        successModal.show();
        form.reset();
      } else {
        // Show error modal
        const errorModal = new bootstrap.Modal(document.getElementById("errorModal"));
        errorModal.show();
      }
    } catch (error) {
      // Show error modal
      const errorModal = new bootstrap.Modal(document.getElementById("errorModal"));
      errorModal.show();
      console.error("Form submission error:", error);
    }
  });
});