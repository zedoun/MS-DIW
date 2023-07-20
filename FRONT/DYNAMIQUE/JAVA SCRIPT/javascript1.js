let from = document.querySelector("form");
from.addEventListener("submit", function (event) {
    let codePostalInput = document.getElementById("codepostal");
    let codePostal = codePostalInput.value;
    if (!/^\d{5}$/.test(codePostal)) {
        alert("Le code postal doit comporter 5 caractères numériques.");
        event.preventDefault();
        codePostalInput.focus();
        return;
    }
    let emailInput = document.getElementById("email");
    let email = emailInput.value;
    if (!email.includes("@")) {
        alert("l'dresse email doit comorter au moins le caractère '@'.");
        event.preventDefault();
        emailInput.focus();
        return;
    }
    let environnementSelect = document.getElementById("environnement");
    let environnementTexte = document.getElementById("environnement-texte");
    if (environnementSelect.value == "choisissez") {
        alert("sélectionnez une option pourl'environnement technique.");
        event.preventDefault()
        environnementSelect.focus();
        return;
    }
    if (environnementSelect.value != "Autre") {
        environnementTexte.value = environnementSelect.value;
    } else {
        if (environnementTexte.value == "choisissez" || environnementTexte.value == "") {
            alert("préciser les technique utiliséés.");
            event.preventDefault();
            environnementTexte.focus();
            return;
        }
    }
});