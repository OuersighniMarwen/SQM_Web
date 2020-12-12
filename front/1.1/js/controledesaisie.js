function controle() {
    var password=document.getElementsByName("password").value;  
    var password2 = document.getElementById("password2").value;
     var phone=document.getElementsByName("phone").value; 
    
    if(password[0] != password[0].toUpperCase())
        {
           alert ("Le nom doit commencer par une lettre Majuscule");
        }
    else if(password2[0] != password2[0].toUpperCase())
        {
             alert( "Le prenom doit commencer par une lettre Majuscule");
        }
        else if (phone.length()!=8)
            { 
                alert ("le num de telephone doit avoir 8 chiffres");}
  
}