function verifierlobjet(subject){
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
   
}   
 