document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.querySelector(".icon");
  const body = document.body;

  menuButton.addEventListener("click", () => {
    body.classList.toggle("menu-open");

    // Optional: toggle icon between bars and times
    const icon = menuButton.querySelector("i");
    if (icon.classList.contains("fa-bars")) {
      icon.classList.remove("fa-bars");
      icon.classList.add("fa-times-circle");
    } else {
      icon.classList.remove("fa-times-circle");
      icon.classList.add("fa-bars");
    }
  });
});