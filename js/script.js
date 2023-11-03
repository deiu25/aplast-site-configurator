// Navbar Sticky on Scroll

// Get The Navbar
const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
  if (window.scrollY > 30) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
});

// navLinks Cloes on click
const navLinks = document.querySelectorAll(".navbar-nav .nav-item .nav-link");
const menuToggle = document.querySelector("#navbarNav");
function navLinksClose() {
  navLinks.forEach((link) => {
    link.addEventListener("click", () => {
      menuToggle.classList.remove("show");
    });
  });
}

navLinksClose();

//  Menu Tabs Small Screen
function togglesmallMenu() {
  var smallMenu = document.getElementById("smallMenu");
  if (window.getComputedStyle(smallMenu).display === "none") {
    smallMenu.style.display = "block";
  } else {
    smallMenu.style.display = "none";
  }
}

//  Small Menu Tabs Width
window.addEventListener("resize", function () {
  var leftMenu = document.querySelector(".left-menu");

  if (window.innerWidth <= 820) {
    leftMenu.classList.remove("w-50");
    leftMenu.classList.add("w-100");
  } else {
    leftMenu.classList.remove("w-100");
    leftMenu.classList.add("w-50");
  }
});
// Trigger the event on page load
window.dispatchEvent(new Event("resize"));

//  Scroll Reveal
const scroll = ScrollReveal({
  distance: "60px",
  delay: 300,
  duration: 2000,
});

scroll.reveal(`.home__info h1, .home__info p, .home__info .main-btn`, {
  origin: "top",
  interval: 100,
});
scroll.reveal(`.home__image img , .home .category-box`, {
  origin: "left",
  interval: 100,
});

scroll.reveal(`.main-heading`, {
  origin: "top",
  interval: 100,
});

scroll.reveal(`.title`, {
  origin: "top",
  interval: 100,
});

scroll.reveal(`.lines-p`, {
  origin: "top",
  interval: 100,
});

scroll.reveal(`.contact-p`, {
  origin: "top",
  interval: 100,
});

scroll.reveal(`.p-center-values`, {
  origin: "top",
  interval: 100,
});

scroll.reveal(`.pctDeVanzare`, {
  origin: "left",
});

scroll.reveal(`.aboutImage`, {
  origin: "right",
});

scroll.reveal(`.menu .search`, {
  origin: "bottom",
});
scroll.reveal(`.menu .menu-content .nav .nav-link`, {
  origin: "left",
  interval: 100,
});
scroll.reveal(`.menu .tab-content`, {
  origin: "right",
  interval: 100,
});
scroll.reveal(`.menu .btn , .careers .box`, {
  origin: "bottom",
  interval: 100,
});

scroll.reveal(`.card-values-container`, {
  origin: "bottom",
  interval: 100,
});

scroll.reveal(`.left`, {
  origin: "left",
});
scroll.reveal(`.right`, {
  origin: "right",
});

scroll.reveal(`.bottom`, {
  origin: "bottom",
  interval: 100,
});

scroll.reveal(`.top`, {
  origin: "top",
  interval: 100,
});

//  Scroll Top Button
const scrollTopButton = document.querySelector(".scroll-top");
window.addEventListener("scroll", () => {
  if (window.scrollY >= 50) {
    scrollTopButton.classList.add("show");
  } else {
    scrollTopButton.classList.remove("show");
  }
});

// Update Year
const year = document.querySelector(".year");
year.innerHTML = new Date().getFullYear();

// Contact Page Map Script

