const navbar = document.getElementById("navbar");

window.addEventListener("scroll", () => {

    if (window.scrollY > 40) {

        navbar.classList.add(
            "bg-slate-950/70",
            "backdrop-blur-xl",
            "border-b",
            "border-white/10"
        );

    } else {

        navbar.classList.remove(
            "bg-slate-950/70",
            "backdrop-blur-xl",
            "border-b",
            "border-white/10"
        );

    }

});