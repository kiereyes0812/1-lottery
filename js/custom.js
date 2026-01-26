const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId);
  const nav = document.getElementById(navId);
  toggle.addEventListener("click", () => {
    nav.classList.toggle("show-menu");
    toggle.classList.toggle("show-icon");
  });
};
showMenu("nav__toggle", "nav__menu");
document.querySelectorAll(".services-toggle").forEach((toggleBtn) => {
  toggleBtn.addEventListener("click", function (e) {
    e.preventDefault();
    if (window.innerWidth <= 767) {
      const submenu = this.nextElementSibling;
      submenu.style.display =
        submenu.style.display === "block" ? "none" : "block";
    }
  });
});

var swiper = new Swiper(".mySwiper", {
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
    0: {
      slidesPerView: 1,
    },

    768: {
      slidesPerView: 2,
    },

    1024: {
      slidesPerView: 4,
    },
  },
});
let myNav = document.getElementById("myheader");

window.onscroll = function () {
  "use strict";
  if (
    document.body.scrollTop >= 50 ||
    document.documentElement.scrollTop >= 50
  ) {
    myNav.classList.add("sticky");
  } else {
    myNav.classList.remove("sticky");
  }
};
const faqs = document.querySelectorAll(".faq-item");

faqs.forEach((faq) => {
  faq.querySelector(".faq-question").addEventListener("click", () => {
    faq.classList.toggle("active");
  });
});
