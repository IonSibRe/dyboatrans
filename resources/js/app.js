import "./bootstrap";

// ========================= Assign classes on load =========================
const homeVehicleSlides = document.querySelectorAll(
    ".home-vehicle-showcase-slide"
);

homeVehicleSlides[0].classList.add("vehicle-current");

// ========================= Change Navbar Active Link =========================
const navLinks = document.querySelectorAll(".nav-link");

navLinks.forEach((link) => {
    if (link.classList.contains("nav-link-active")) {
        link.classList.remove("nav-link-active");
    }

    if (
        "/" +
            window.location.href.split("/")[
                window.location.href.split("/").length - 1
            ] ===
        link.getAttribute("href")
    ) {
        link.classList.add("nav-link-active");
    }
});

// ========================= Change Mobile Navbar Active Link =========================
const navMobileLinks = document.querySelectorAll(".nav-mobile-link");

navMobileLinks.forEach((link) => {
    if (link.classList.contains("nav-mobile-link-active")) {
        link.classList.remove("nav-mobile-link-active");
    }

    if (
        "/" +
            window.location.href.split("/")[
                window.location.href.split("/").length - 1
            ] ===
        link.getAttribute("href")
    ) {
        link.classList.add("nav-mobile-link-active");
    }
});

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

// ========================= Navbar fixed on scroll =========================
const nav = document.querySelector(".nav");
const navMobile = document.querySelector(".nav-mobile");

window.addEventListener("scroll", () => {
    if (window.scrollY > nav.offsetHeight) {
        nav.classList.add("nav-fixed");
        navMobile.classList.add("nav-fixed");
    } else {
        nav.classList.remove("nav-fixed");
        navMobile.classList.remove("nav-fixed");
    }
});

// ========================= Slideshow =========================
const slides = document.querySelectorAll(".home-header-showcase-slide");
const dots = document.querySelectorAll(".home-header-showcase-dot");
const next = document.querySelector("#home-header-showcase-btns-next");
const prev = document.querySelector("#home-header-showcase-btns-prev");

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
next.addEventListener("click", nextSlide);
prev.addEventListener("click", prevSlide);

// ========================= Vehicle Slideshow =========================
const vehicleSlides = document.querySelectorAll(".home-vehicle-showcase-slide");
const vehiclePrev = document.querySelector("#home-vehicle-showcase-btns-prev");
const vehicleNext = document.querySelector("#home-vehicle-showcase-btns-next");
const vehicleMobilePrev = document.querySelector(
    "#home-vehicle-showcase-mobile-btns-prev"
);
const vehicleMobileNext = document.querySelector(
    "#home-vehicle-showcase-mobile-btns-next"
);

const vehicleNextSlide = () => {
    const vehicleCurrent = document.querySelector(".vehicle-current");
    vehicleCurrent.classList.remove("vehicle-current");

    if (vehicleCurrent.nextElementSibling) {
        vehicleCurrent.nextElementSibling.classList.add("vehicle-current");
    } else {
        vehicleSlides[0].classList.add("vehicle-current");
    }

    setTimeout(() => {
        vehicleCurrent.classList.remove("vehicle-current");
    });
};

const vehiclePrevSlide = () => {
    const vehicleCurrent = document.querySelector(".vehicle-current");
    vehicleCurrent.classList.remove("vehicle-current");

    if (vehicleCurrent.previousElementSibling) {
        vehicleCurrent.previousElementSibling.classList.add("vehicle-current");
    } else {
        vehicleSlides[vehicleSlides.length - 1].classList.add(
            "vehicle-current"
        );
    }

    setTimeout(() => {
        vehicleCurrent.classList.remove("vehicle-current");
    });
};

vehiclePrev.addEventListener("click", vehiclePrevSlide);
vehicleNext.addEventListener("click", vehicleNextSlide);
vehicleMobilePrev.addEventListener("click", () => {
    console.log("click");
    vehiclePrevSlide();
});
vehicleMobileNext.addEventListener("click", vehicleNextSlide);
