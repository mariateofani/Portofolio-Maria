const navbar = document.getElementById("navbar");

window.addEventListener("scroll", () => {

    if (window.scrollY > 50) {

        navbar.classList.add(
            "bg-slate-950/80",
            "backdrop-blur-xl",
            "shadow-lg"
        );

    } else {

        navbar.classList.remove(
            "bg-slate-950/80",
            "backdrop-blur-xl",
            "shadow-lg"
        );

    }

});