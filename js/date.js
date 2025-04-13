document.addEventListener("DOMContentLoaded", function() {
  const dateElement = document.getElementById("current-date");
  const today = new Date();

  const options = { year: 'numeric', month: 'long', day: 'numeric' };
  dateElement.textContent = today.toLocaleDateString(undefined, options);
});