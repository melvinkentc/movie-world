document.querySelectorAll('.slider-wrapper').forEach(wrapper => {
  const slider = wrapper.querySelector('.slider');
  let scrollAmount = 0;
  let autoScroll;

  function startScroll() {
    autoScroll = setInterval(() => {
      scrollAmount += 2;
      if (scrollAmount >= slider.scrollWidth - wrapper.clientWidth) {
        scrollAmount = 0; // Loop back
      }
      slider.style.transform = `translateX(-${scrollAmount}px)`;
    }, 20);
  }

  function stopScroll() {
    clearInterval(autoScroll);
  }

  wrapper.addEventListener('mouseenter', startScroll);
  wrapper.addEventListener('mouseleave', stopScroll);
});