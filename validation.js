let fNameInput = document.getElementById("fname");
let lNameInput = document.getElementById("lname");
let phoneInput = document.getElementById("phone");
let passInput = document.getElementById("pass");
let cPassInput = document.getElementById("cpass");
var letters = /^[A-Za-z]+$/;

function passValidation() {
    if (
        passInput.value != cPassInput.value ||
        passInput.value == "" ||
        cPassInput == ""
    ) {
        alert("Les mots de passe ne correspondent pas");

        return false;
    } else {
        alert(" OK");
    }
}

function nameValidation() {
    if (lNameInput.value.length < 3) {
        lNameError = " Le nom doit compter au minimum 3 caractères.";
        document.getElementById("nomEr").innerHTML = lNameError;

        return false;
    }
    if (!lNameInput.value.match(letters)) {
        lNameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
        lNameValid2 = false;
        document.getElementById("nomEr").innerHTML = lNameError2;
        return false;
    }
    document.getElementById("nomEr").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
}

document.forms["inscription"].addEventListener("submit", function (e) {
    var inputs = document.forms["inscription"];
    let ids = [
        "erreur",
        "nomEr",
        "prenomEr",
        "phoneEr",
        "passEr",
        "cPassEr",
        "erreur",
    ];

    ids.map((id) => (document.getElementById(id).innerHTML = "")); // reinitialiser l'affichage des erreurs

    let errors = false;

    //Traitement cas par cas
    if (lNameInput.value.length < 3) {
        errors = false;
        document.getElementById("nomEr").innerHTML =
            "Le nom doit compter au minimum 3 caractères.";
    } else if (!lNameInput.value.match(letters)) {
        errors = false;
        document.getElementById("nomEr").innerHTML =
            "Veuillez entrer un nom valid ! (seulement des lettres)";
    } else {
        errors = true;
    }
    if (fNameInput.value.length < 4) {
        errors = false;
        document.getElementById("prenomEr").innerHTML =
            "Le prénom doit compter au minimum 4 caractères";
    } else {
        errors = true;
    }

    if (isNaN(phoneInput.value)) {
        errors = false;
        document.getElementById("phoneEr").innerHTML =
            "Le numéro ne doit pas contenir des lettres";
    } else {
        errors = true;
    }
    if (
        !(
            passInput.value.match(/[0-9]/g) &&
            passInput.value.match(/[A-Z]/g) &&
            passInput.value.match(/[a-z]/g) &&
            passInput.value.length >= 10
        )
    ) {
        errors = false;
        document.getElementById("passEr").innerHTML = "Mot de passe faible";
    } else {
        errors = true;
    }

    if (passInput.value != cPassInput.value) {
        errors = false;
        document.getElementById("cPassEr").innerHTML =
            "Les mots de passe ne correspondent pas";
    } else {
        errors = true;
    }

    //Traitement générique
    for (var i = 0; i < inputs.length; i++) {
        if (!inputs[i].value) {
            errors = false;
            document.getElementById("erreur").innerHTML =
                "Veuillez renseigner tous les champs";
        }
    }

    if (errors === false) {
        e.preventDefault();
    } else {
        alert("formulaire envoyé");
    }
});