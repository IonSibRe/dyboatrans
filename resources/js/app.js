import "./bootstrap";

// ========================= Mobile Navbar =========================
const barsBtn = document.querySelector(".nav-mobile-bars-btn");
const navbarMobileItemWrap = document.querySelector(".nav-mobile-item-wrap");
const navbarMobileItems = document.querySelectorAll(".nav-mobile-item");

let navbarHeight = 0;
navbarMobileItems.forEach((item) => {
    navbarHeight += item.offsetHeight;
});

barsBtn.addEventListener("click", () => {
    if (navbarMobileItemWrap.offsetHeight === 0) {
        navbarMobileItemWrap.style.height = navbarHeight + "px";
    } else {
        navbarMobileItemWrap.style.height = 0;
    }
});

// ========================= Slideshow =========================
const slides = document.querySelectorAll(".home-header-showcase-slide");
const dots = document.querySelectorAll(".home-header-showcase-dot");
const next = document.querySelector("#home-header-showcase-btns-next");
const prev = document.querySelector("#home-header-showcase-btns-prev");
const auto = false; // Auto scroll
const intervalTime = 5000;
let slideInterval;

const nextSlide = () => {
    // Get current class
    const current = document.querySelector(".current");
    const currentDot = document.querySelector(
        ".home-header-showcase-dot-current"
    );
    // Remove current class
    current.classList.remove("current");
    currentDot.classList.remove("home-header-showcase-dot-current");
    // Check for next slide
    if (current.nextElementSibling) {
        // Add current to next sibling
        current.nextElementSibling.classList.add("current");
        currentDot.nextElementSibling.classList.add(
            "home-header-showcase-dot-current"
        );
    } else {
        // Add current to start
        slides[0].classList.add("current");
        dots[0].classList.add("home-header-showcase-dot-current");
    }
    setTimeout(() => {
        current.classList.remove("current");
        currentDot.classList.remove("home-header-showcase-dot-current");
    });
};

const prevSlide = () => {
    // Get current class
    const current = document.querySelector(".current");
    const currentDot = document.querySelector(
        ".home-header-showcase-dot-current"
    );
    // Remove current class
    current.classList.remove("current");
    currentDot.classList.remove("home-header-showcase-dot-current");
    // Check for prev slide
    if (current.previousElementSibling) {
        // Add current to prev sibling
        current.previousElementSibling.classList.add("current");
        currentDot.previousElementSibling.classList.add(
            "home-header-showcase-dot-current"
        );
    } else {
        // Add current to last
        slides[slides.length - 1].classList.add("current");
        dots[slides.length - 1].classList.add(
            "home-header-showcase-dot-current"
        );
    }
    setTimeout(() => {
        current.classList.remove("current");
        currentDot.classList.remove("home-header-showcase-dot-current");
    });
};

// Button events
next.addEventListener("click", (e) => {
    nextSlide();
    if (auto) {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, intervalTime);
    }
});

prev.addEventListener("click", (e) => {
    prevSlide();
    if (auto) {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, intervalTime);
    }
});

// Auto slide
if (auto) {
    // Run next slide at interval time
    slideInterval = setInterval(nextSlide, intervalTime);
}
