document.addEventListener("DOMContentLoaded", function () {
  const currentDateElement = document.getElementById("current-date");
  const date = new Date();

  const day = String(date.getDate()).padStart(2, '0'); // Always 2 digits
  const year = date.getFullYear();

  // Get full month name using locale
  const month = date.toLocaleString('default', { month: 'long' });

  currentDateElement.textContent = `${month} ${day}, ${year}`;
});