function queDesChiffres(champ) {
  if((champ.value)>99) {

     
    alert("le pourcentage ne peu pas etre plus que 99% !");
    champ.focus();

    return false;

  }
  return true;
}

function queDesChiffre(champ) {
  if(!/^[0-9]+$/.test(champ.value)) {
    alert("C'est pas que des chiffres !");
    champ.focus();
    return false;
  }
  return true;
}
function queDesLettres(champ) {
  if(!/^[a-zA-Z]+$/.test(champ.value)) {
    alert("C'est pas que des lettres !");
    champ.focus();
    return false;
  }
  return true;
}



function Commande() {
    var date = document.getElementByName("in4").value;
      
    var today= new Date();
    var date_livraison = new Date(date);
    
   
    if(today.toISOString() > date_livraison.toISOString())
        {
             alert("Date doit être supérieur à Aujourd'hui");
        }
    
    
}