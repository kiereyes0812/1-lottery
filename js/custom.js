// Mobile menu toggle
const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId);
  const nav = document.getElementById(navId);
  if (!toggle || !nav) return;

  toggle.addEventListener("click", () => {
    nav.classList.toggle("show-menu");
    toggle.classList.toggle("show-icon");
  });
};
showMenu("nav__toggle", "nav__menu");

// Mobile submenu toggle
document.querySelectorAll(".services-toggle").forEach((toggleBtn) => {
  toggleBtn.addEventListener("click", function (e) {
    e.preventDefault();
    if (window.innerWidth <= 767) {
      const submenu = this.nextElementSibling;
      if (!submenu) return;
      submenu.style.display = submenu.style.display === "block" ? "none" : "block";
    }
  });
});

// Swiper (only if library + element exist)
if (typeof Swiper !== "undefined" && document.querySelector(".mySwiper")) {
  new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: false,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    speed: 1000,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 4 },
    },
  });
}

// Sticky header
const myNav = document.getElementById("myheader");
window.addEventListener("scroll", () => {
  if (!myNav) return;
  if (document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50) {
    myNav.classList.add("sticky");
  } else {
    myNav.classList.remove("sticky");
  }
});

// FAQ accordion
document.querySelectorAll(".faq-item").forEach((faq) => {
  const q = faq.querySelector(".faq-question");
  if (!q) return;

  q.addEventListener("click", (e) => {
    // Prevent button default behavior
    e.preventDefault();
    faq.classList.toggle("active");
  });
});
