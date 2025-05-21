(function (d) {
  'use strict';

  const icon = d.querySelector('.icon');
  const menu = d.querySelector('#navbarcontainer ul');

  if (icon && menu) {
    icon.addEventListener('click', function (event) {
      event.stopPropagation();
      menu.classList.toggle('menu-open');

      const iconElem = icon.querySelector('i');
      if (iconElem.classList.contains('fa-bars')) {
        iconElem.classList.remove('fa-bars');
        iconElem.classList.add('fa-times-circle');
      } else {
        iconElem.classList.remove('fa-times-circle');
        iconElem.classList.add('fa-bars');
      }
    });

    menu.addEventListener('click', function (event) {
      event.stopPropagation();
    });

    document.addEventListener('click', function (event) {
      if (!menu.contains(event.target) && !icon.contains(event.target)) {
        menu.classList.remove('menu-open');
        const iconElem = icon.querySelector('i');
        iconElem.classList.remove('fa-times-circle');
        iconElem.classList.add('fa-bars');
      }
    });
  }
})(document);

// Wait for full DOM load
document.addEventListener("DOMContentLoaded", function () {
  // ====================
  // Hover Slider
  // ====================
  document.querySelectorAll(".hover-slider").forEach(slider => {
    const track = slider.querySelector(".slider-track");
    const dots = slider.querySelectorAll(".dot");
    const slides = Array.from(slider.querySelectorAll(".slider-track a"));
    const visibleSlides = 4;
    const slideWidth = 220;
    let currentIndex = 0;
    let hoverInterval;

    // Ensure enough slides before cloning
    if (slides.length > 0) {
      for (let i = 0; i < visibleSlides; i++) {
        if (slides[i]) {
          const clone = slides[i].cloneNode(true);
          track.appendChild(clone);
        }
      }
    }

    const slideCount = slides.length;
    const totalSlides = slideCount + visibleSlides;

    function goToIndex(index, instant = false) {
      track.style.transition = instant ? "none" : "transform 0.5s ease-in-out";
      track.style.transform = `translateX(-${index * slideWidth}px)`;

      dots.forEach(dot => dot.classList.remove("active"));
      if (dots[index % slideCount]) dots[index % slideCount].classList.add("active");

      currentIndex = index;
    }

    function startAutoSlide() {
      hoverInterval = setInterval(() => {
        currentIndex++;
        goToIndex(currentIndex);

        if (currentIndex >= slideCount) {
          setTimeout(() => {
            goToIndex(0, true);
          }, 500);
          currentIndex = 0;
        }
      }, 3000);
    }

    function stopAutoSlide() {
      clearInterval(hoverInterval);
    }

    dots.forEach(dot => {
      dot.addEventListener("click", function () {
        const index = parseInt(this.dataset.index);
        goToIndex(index);
        currentIndex = index;
      });
    });

    slider.addEventListener("mouseenter", startAutoSlide);
    slider.addEventListener("mouseleave", stopAutoSlide);
  });

  // ====================
  // Highlight Current Nav Link
  // ====================
  const currentPage = window.location.pathname.split("/").pop();
  document.querySelectorAll("nav ul li a").forEach(link => {
    const linkPage = link.getAttribute("href");
    if (linkPage === currentPage) {
      link.classList.add("active");
    }
  });

  // ====================
  // Contact Form Submission
  // ====================
  const form = document.getElementById("contact-form");
  if (form) {
    form.addEventListener("submit", async (e) => {
      e.preventDefault();

      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const phone = document.getElementById("phone").value.trim();
      const message = document.getElementById("message").value.trim();

      let isValid = true;
      document.querySelectorAll(".error-msg").forEach(el => el.style.display = "none");

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

      try {
        const formData = new FormData(form);
        const response = await fetch("php/contactform_submit.php", {
          method: "POST",
          body: formData,
        });

        const result = await response.json();

        const successModal = new bootstrap.Modal(document.getElementById("successModal"));
        const errorModal = new bootstrap.Modal(document.getElementById("errorModal"));

        if (result.status === "success") {
          successModal.show();
          form.reset();
        } else {
          errorModal.show();
        }
      } catch (error) {
        const errorModal = new bootstrap.Modal(document.getElementById("errorModal"));
        errorModal.show();
        console.error("Form submission error:", error);
      }
    });
  }

  // ====================
  // Dropdown Accordion
  // ====================
  const dropdownButtons = document.querySelectorAll('.dropdown button');
  dropdownButtons.forEach(button => {
    button.addEventListener('click', function () {
      toggleDropdown(button);
    });
  });
});

function toggleDropdown(clickedButton) {
  const allButtons = document.querySelectorAll(".dropdown button");
  const allContents = document.querySelectorAll(".dropdown-content");

  allButtons.forEach(button => {
    if (button !== clickedButton) {
      button.classList.remove("active");
      const arrow = button.querySelector(".arrow");
      if (arrow) arrow.textContent = "▶";
    }
  });

  allContents.forEach(content => {
    if (content !== clickedButton.nextElementSibling) {
      content.style.maxHeight = null;
      content.classList.remove("open");
    }
  });

  const isActive = clickedButton.classList.toggle("active");
  const arrow = clickedButton.querySelector(".arrow");
  const content = clickedButton.nextElementSibling;

  if (isActive) {
    content.classList.add("open");
    content.style.maxHeight = content.scrollHeight + "px";
    if (arrow) arrow.textContent = "▼";
  } else {
    content.classList.remove("open");
    content.style.maxHeight = null;
    if (arrow) arrow.textContent = "▶";
  }
}
