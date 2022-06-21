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

function toonOntkoppelAlert() {
    let confirmAction = confirm("Weet je zeker dat je alle brillen wil ontkoppelen?");
    if (confirmAction) {
        const Http = new XMLHttpRequest();
        const url = 'http://localhost:8000/api/ontkoppel';
        Http.open("GET", url);
        Http.send();
        alert("Alle brillen zijn ontkoppeld");
        location.reload();
    }
}