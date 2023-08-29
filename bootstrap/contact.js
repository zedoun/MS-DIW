console.log("connecté.!:)");

document.forms["contact"].addEventListener("submit", function (e) {
    const inputs = this;
    const nom_v = /^[a-zA-Z\s]+$/;
    const email_v = /^[a-zA-Z0-9.-_]+@{1}[a-zA-Z_-]+[.]{1}[a-zA-Z]{2,3}$/;
    const telephone_v = /^0[1-9]{9}$/;
    const text_v = /^[a-zA-Z\s]+{1,300}$/;

    if (nom_v.test(this["nom"].value.trim()) == false) {
        e.preventDefault();
        document.getElementById("nom_inv").innerHTML = "Nom invalide";
    }
    else {
        document.getElementById("nom_inv").innerHTML = "";
    }

    if (nom_v.test(this["prenom"].value.trim()) == false) {
        e.preventDefault();
        document.getElementById("prenom_inv").innerHTML = "Prenom invalide";
    }
    else {
        document.getElementById("prenom_inv").innerHTML = "";
    }

    if (email_v.test(this["email"].value.trim().split("").join("")) == false) {
        e.preventDefault();
        document.getElementById("email_inv").innerHTML = "Email invalide";
    }
    else {
        document.getElementById("email_inv").innerHTML = "";
    }

    if (telephone_v.test(this["telephone"].value.trim().split("").join("")) == false) {
        e.preventDefault();
        document.getElementById("telephone_inv").innerHTML = "Numéro de telephone invalide";
        e.preventDefault();
    }
    else {
        document.getElementById("telephone_inv").innerHTML = "";
        e.preventDefault();
    }



    if (text_v.test(this["text"].value.trim()) == false) {
        e.preventDefault();
        document.getElementById("text_inv").innerHTML = "le champ est requis"
        e.preventDefault();
    }
    else {
        document.getElementById("text_inv").innerHTML == "";
    }
    if (document.getElementById("nom_inv").innerHTML == "" &&
        document.getElementById("prenom_inv").innerHTML == "" &&
        document.getElementById("email_inv").innerHTML == "" &&
        document.getElementById("telephone_inv").innerHTML == "" &&
        document.getElementById("text_inv").innerHTML == "") {
        alert("C'EST BIEN ENVOYER")
    }

})





