document.addEventListener("DOMContentLoaded", function () {
    const cookiePopup = document.getElementById("cookie-popup");
    const acceptCookiesButton = document.getElementById("accept-cookies");

    // Helper to get cookie value
    function getCookie(name) {
      const value = "; " + document.cookie;
      const parts = value.split("; " + name + "=");
      if (parts.length === 2) return parts.pop().split(";").shift();
    }

    // Only show popup if cookie is not set
    if (!getCookie("cookies_accepted")) {
      cookiePopup.style.display = "block";
    }

    // Set cookie when accepted
    acceptCookiesButton.addEventListener("click", function () {
      document.cookie = "cookies_accepted=true; path=/; max-age=" + (60 * 60 * 24 * 365); // 1 year
      cookiePopup.style.display = "none";
    });
});