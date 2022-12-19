import "./bootstrap";
import Swiper from "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js";

const swiper = new Swiper(".swiper", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

ScrollReveal({ reset: true });
ScrollReveal().reveal(".home");
ScrollReveal().reveal(".projects", { delay: 500 });
ScrollReveal().reveal(".repositories", { delay: 500 });
ScrollReveal().reveal(".contact", { relay: 500 });
