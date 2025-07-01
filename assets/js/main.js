document.addEventListener("DOMContentLoaded", () => {
    const themeToggleBtn = document.getElementById('themeToggle');
    const savedTheme = localStorage.getItem("theme") || "light";
    applyTheme(savedTheme);

    themeToggleBtn.addEventListener("click", () => {
        const currentTheme = document.documentElement.getAttribute("data-bs-theme") || "light";
        const newTheme = currentTheme === "light" ? "dark" : "light";
        applyTheme(newTheme);
    });
});

function applyTheme(theme) {
    document.documentElement.setAttribute("data-bs-theme", theme);
    localStorage.setItem("theme", theme);
    const icon = document.querySelector("#themeToggle i");
    if (icon) {
        icon.className = theme === "dark" ? "bi bi-moon" : "bi bi-sun";
    }
}


document.addEventListener("DOMContentLoaded", function () {
    const nav = document.getElementById("mainNav");

    function updateNavBackground() {
        if (window.scrollY > 100) {
            nav.classList.add("scrolled");
        } else {
            nav.classList.remove("scrolled");
        }
    }

    window.addEventListener("scroll", updateNavBackground);
    updateNavBackground(); // Sayfa yenilendiğinde kontrol et
});



window.addEventListener("DOMContentLoaded", () => {
    const paths = document.querySelectorAll('#logo path');

    paths.forEach(path => {
        const length = path.getTotalLength();
        path.dataset.length = length;
        path.style.strokeDasharray = length;
        path.style.strokeDashoffset = length;
        path.style.stroke = "#D0B581";
        path.style.fill = "#D0B581";
        path.style.fillOpacity = 0;
    });

    let finishedCount = 0;
    const totalPaths = paths.length;

    paths.forEach((path, i) => {
        const length = parseFloat(path.dataset.length);

        anime({
            targets: path,
            strokeDashoffset: [length, 0],
            easing: 'easeOutQuad',
            duration: 2000 + length,
            delay: i * 150,
            complete: () => {
                finishedCount++;
                if (finishedCount === totalPaths) {
                    // tüm stroke animasyonları bittiğinde fill animasyonu başlasın
                    anime({
                        targets: paths,
                        fillOpacity: [0, 1],
                        duration: 1000,
                        easing: 'easeInOutQuad',
                        complete: () => {
                            // paths.forEach(p => p.style.stroke = "none");
                        }
                    });
                }
            }
        });
    });
});
