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

