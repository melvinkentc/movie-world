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
  const track = document.querySelector(".slider-track");
  const dots = document.querySelectorAll(".dot");
  const slider = document.getElementById("hover-slider");
  const slideCount = document.querySelectorAll(".slider-track a").length;
  const visibleSlides = 4;
  const slideWidth = 220; // image width + margin
  let currentIndex = 0;
  let hoverInterval;

  function goToIndex(index) {
    const maxIndex = slideCount - visibleSlides;
    if (index > maxIndex) index = 0;
    if (index < 0) index = maxIndex;

    track.style.transform = `translateX(-${index * slideWidth}px)`;
    dots.forEach(dot => dot.classList.remove("active"));
    if (dots[index]) dots[index].classList.add("active");

    currentIndex = index;
  }

  // Dot navigation
  dots.forEach(dot => {
    dot.addEventListener("click", function () {
      const index = parseInt(this.dataset.index);
      goToIndex(index);
    });
  });

  function startAutoSlide() {
    hoverInterval = setInterval(() => {
      goToIndex((currentIndex + 1) % slideCount);
    }, 3000);
  }

  function stopAutoSlide() {
    clearInterval(hoverInterval);
  }

  slider.addEventListener("mouseenter", startAutoSlide);
  slider.addEventListener("mouseleave", stopAutoSlide);
});