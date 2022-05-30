var bestellingen = document.getElementsByClassName("bestelling");

for (let bestelling of bestellingen) {
    bestelling.addEventListener("click", veranderAchtergrond = (event) => {
        bestelling.style.backgroundColor = "green";
    })
}