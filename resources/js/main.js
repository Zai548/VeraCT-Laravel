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
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

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

document.addEventListener("DOMContentLoaded", function () {
    const defaultImage = document.getElementById("default-image");
    const images = document.querySelectorAll(".process-image-wrapper img");
    const steps = document.querySelectorAll(".process-style-box ");

    steps.forEach((step) => {
        step.addEventListener("mouseenter", function () {
            let targetId = step.getAttribute("data-target");

            images.forEach((img) => img.classList.remove("active")); // Hide all images
            document.getElementById(targetId).classList.add("active"); // Show target image
        });

        step.addEventListener("mouseleave", function () {
            images.forEach((img) => img.classList.remove("active")); // Hide all images
            defaultImage.classList.add("active"); // Show default image again
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".features-style").forEach(function (box) {
        box.addEventListener("click", function () {
            const link = this.getAttribute("data-link");
            if (link) {
                window.location.href = link; // Redirect to the link
            }
        });
    });
});

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();

        const targetId = this.getAttribute("href").substring(1); // Remove '#'
        const target = document.getElementById(targetId);

        if (target) {
            window.scrollTo({
                top: target.offsetTop - 80, // Adjust offset
                behavior: "smooth",
            });
        }
    });
});
