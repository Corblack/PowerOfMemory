let timerId = null;

function genererGrille() {
    const gridElement = document.getElementById("grid");
    const taille = document.querySelector('#menu1').value;
    const difficulte = document.querySelector('#menu2').value;

    console.log("taille :", taille, " / difficulté :", difficulte);

    if (!taille) {
        console.warn("Aucune taille sélectionnée");
        return;
    }

    // Ex : "4x4" → [4,4]
    const [rows, cols] = taille.split("x").map(Number);
    const totalCards = rows * cols;

    // Applique les colonnes CSS grid
    gridElement.style.display = "grid"; 
    gridElement.style.gridTemplateColumns = `repeat(${cols}, 1fr)`;

    // Vide la grille
    gridElement.innerHTML = "";

    // Image (à adapter si besoin)
    const imgPath = "/ProjetFlash/assets/images/memory card.jpg";

    // Génère les cartes
    for (let i = 0; i < totalCards; i++) {
        const cell = document.createElement("div");
        cell.classList.add("cell");

        const img = document.createElement("img");
        img.src = imgPath;
        img.alt = "carte";

        cell.appendChild(img);
        gridElement.appendChild(cell);
    }
}

function startTimer() {
    const timerElement = document.getElementById("timer");
    let temps = 0;

    // Empêche plusieurs timers
    if (timerId !== null) {
        clearInterval(timerId);
    }

    timerElement.innerText = "00:00";

    timerId = setInterval(() => {
        temps++;

        let minutes = Math.floor(temps / 60);
        let secondes = temps % 60;

        if (minutes < 10) minutes = "0" + minutes;
        if (secondes < 10) secondes = "0" + secondes;

        timerElement.innerText = `${minutes}:${secondes}`;
    }, 1000);
}

const generateBtn = document.querySelector('#generer');

generateBtn?.addEventListener('click', () => {
    genererGrille();
    startTimer();
});
