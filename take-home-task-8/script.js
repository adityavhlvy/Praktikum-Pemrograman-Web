document.addEventListener("DOMContentLoaded", function () {
  createNavigation();
  createSocialMediaLinks();

  var modal = document.getElementById("id01");

  window.addEventListener("click", function (event) {
    if (event.target === modal) {
      closeModal();
    }
  });

  function openModal() {
    modal.style.display = "block";
  }

  function closeModal() {
    modal.style.display = "none";
  }

  document
    .querySelector(".modal .close")
    .addEventListener("click", function () {
      closeModal();
    });

  document
    .querySelector("button[onclick='openModal()']")
    .addEventListener("click", function () {
      openModal();
    });
});

function toggleDarkMode() {
  const body = document.querySelector("body");
  const nav = document.querySelector("nav");
  const topNav = document.querySelector(".top-nav");
  const loginButton = document.querySelector(".login-button");
  const title = document.querySelector(".title");

  body.classList.toggle("dark-mode");
  nav.classList.toggle("dark-mode");
  topNav.classList.toggle("dark-mode");
  loginButton.classList.toggle("dark-mode");
  title.classList.toggle("dark-mode");

  const isDarkMode = body.classList.contains("dark-mode");
  localStorage.setItem("darkMode", isDarkMode);
}

document.addEventListener("DOMContentLoaded", function () {
  const isDarkMode = localStorage.getItem("darkMode");
  if (isDarkMode === "true") {
    toggleDarkMode();
  }
});
