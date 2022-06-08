var bestellingen = document.getElementsByClassName("bestelling");

for (let bestelling of bestellingen) {
    bestelling.addEventListener("click", veranderAchtergrond = (event) => {
        bestelling.style.backgroundColor = "#95BF74";
    })
}

// bottleClick();

function bottleClick() {
    alert("Er is door een gebruiker op de fles geklikt!");
}