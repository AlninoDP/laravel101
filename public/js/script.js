window.onload = function () {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach((link) => {
        if (link.getAttribute("href") === currentPath) {
            link.classList.add("active");
        }
    });

    navLinks.forEach((link) => {
        link.addEventListener("click", function () {
            navLinks.forEach((item) => {
                item.classList.remove("active");
            });
            this.classList.add("active");
        });
    });
};
