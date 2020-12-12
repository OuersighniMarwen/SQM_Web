function queDesChiffres(champ) {
  if(!/^[0-9]+$/.test(champ.value)) {
    alert("C'est pas que des chiffres !");
    champ.focus();
    return false;
  }
  return true;
}