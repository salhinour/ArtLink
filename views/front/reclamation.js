/*function verifierlobjet(subject){
    if (subject.length>10)
    {
      alert("verifier votre objet");
      return false;
    }
    for (var i=0;i<subject.length;i++)
    {
       var c=subject.charAt(i).toUpperCase()
       if((c<'A')||(c>'Z'))
       return false ;
    }
    return true;
}
function verifiermessage(message){
    if (message.length<=2)
    {
      alert("verifier votre message");
      return false;
    }
    for (var i=0;i<message.length;i++)
    {
       var c=message.charAt(i).toUpperCase()
       if((c<'A')||(c>'Z'))
       return false ;
    }
    return true;
}

function verif(){
    var subject=document.getElementById("subject").value;
     var message=document.getElementById("message").value;
   if (!verifierlobjet(subject))
   {
    alert("verifier votre subject");
   }
   else if (subject=="" || message=="")
   {
    alert("verifier remplir les champs svp");
   }
   else if (!verifiermessage(message))
   {
    alert("le message n'est pas clair veuillez continuez");
   }
   
}   */
let subject = document.getElementById("subject");
let message = document.getElementById("message");
var letters = /^[A-Za-z]+$/;



function subjectValidation() {
    if (subject.value.length < 3) {
        lsubjectError = " Le sujet doit compter au minimum 3 caractères.";
        document.getElementById("subjectEr").innerHTML = lsubjectError;
        return false;
    }
    if (!subject.value.match(letters)) {
        lsubjectError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
        lsubjectValid2 = false;
        document.getElementById("subjectEr").innerHTML = lsubjectError2;
        return false;
    }
    else{
    document.getElementById("subjectEr").innerHTML ="<p style='color:green'> Correct </p>";
    return true;}
 else  if (message.value.length < 10) {
    lmessageError = " Le message est trop court.";
    document.getElementById("messageEr").innerHTML = lmessageError;
    return false;
}
else if (!message.value.match(letters)) {
    lmessageError2 = "Veuillez entrer un message valid ! (seulement des lettres)";
    lmessageValid2 = false;
    document.getElementById("messageEr").innerHTML = lmessageError2;
    return false;
}
document.getElementById("messageEr").innerHTML ="<p style='color:green'> Correct </p>";
return true;
}
/*document.forms["contact-form"].addEventListener("submit", function (e) {
    var inputs = document.forms["contact-form"];
    let ids = [
        "erreur",
        "subjectEr",
        "messageEr",
        "erreur",
    ];

    ids.map((id) => (document.getElementById(id).innerHTML = "")); // reinitialiser l'affichage des erreurs

    let errors = false;

    //Traitement cas par cas
    if (subject.value.length < 3) {
        errors = false;
        document.getElementById("subjectEr").innerHTML =
            "L'objet doit compter au minimum 3 caractères.";
    } else if (!subject.value.match(letters)) {
        errors = false;
        document.getElementById("subjectEr").innerHTML =
            "Veuillez entrer un objet valid ! (seulement des lettres)";
    } else {
        errors = true;
    }
    if (message.value.length < 10) {
      errors = false;
      document.getElementById("subjectEr").innerHTML =
          "Le message est trop court.";
  } else if (!message.value.match(letters)) {
      errors = false;
      document.getElementById("messageEr").innerHTML =
          "Veuillez entrer un message valid ! (seulement des lettres)";
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
});*/
 