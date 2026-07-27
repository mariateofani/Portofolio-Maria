const starsContainer = document.getElementById("stars");

if (starsContainer) {

    for (let i = 0; i < 180; i++) {

        const star = document.createElement("span");

        const size = Math.random() * 3 + 1;

        star.style.width = size + "px";
        star.style.height = size + "px";

        star.style.left = Math.random() * 100 + "%";
        star.style.top = Math.random() * 100 + "%";

        star.style.animationDelay = Math.random() * 5 + "s";
        star.style.animationDuration = (Math.random() * 4 + 2) + "s";

        starsContainer.appendChild(star);

    }

}

/* ==========================
   SHOOTING STAR
========================== */

const shootingContainer = document.getElementById("shooting-stars");

function createShootingStar() {

    if (!shootingContainer) return;

    const star = document.createElement("div");

    star.className = "shooting-star shooting";

    // posisi awal acak di bagian atas
    star.style.top = Math.random() * 35 + "%";

    // panjang ekor acak
    star.style.width = (120 + Math.random() * 120) + "px";

    shootingContainer.appendChild(star);

    setTimeout(() => {

        star.remove();

    }, 2000);

}

// pertama muncul setelah 2 detik
setTimeout(createShootingStar, 2000);

// lalu muncul terus dengan jeda acak
setInterval(() => {

    createShootingStar();

}, 4000 + Math.random() * 4000);