document.addEventListener("DOMContentLoaded", function () {
    const navEl = document.querySelector(".navbar");

    window.addEventListener("scroll", function () {
        if (window.scrollY >= 60) {
            navEl.classList.add("scrolled");
        } else {
            navEl.classList.remove("scrolled");
        }
    });

    const sections = document.querySelectorAll(".section-div");
    const navLinks = document.querySelectorAll(".side-nav .side-nav-link");

    function changeActiveLink() {
        let scrollY = window.scrollY;

        sections.forEach((section) => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.offsetHeight;

            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                const targetId = section.getAttribute("id");

                navLinks.forEach((link) => {
                    link.classList.remove("active");
                    if (link.getAttribute("href") === `#${targetId}`) {
                        link.classList.add("active");
                    }
                });
            }
        });
    }

    window.addEventListener("scroll", changeActiveLink);

    const dropdownItems = document.querySelectorAll(".nav-item.dropdown");

    dropdownItems.forEach((item) => {
        // When hovering over the dropdown
        item.addEventListener("mouseenter", function () {
            item.classList.add("show");
            item.querySelector(".dropdown-menu").classList.add("show");
        });

        // When mouse leaves the dropdown
        item.addEventListener("mouseleave", function () {
            item.classList.remove("show");
            item.querySelector(".dropdown-menu").classList.remove("show");
        });
    });
});
