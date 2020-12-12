

      <form method="get">
        <div class="page-header">
        <center> <div> <h2 style="color:#3CBC8D;width:500px;font-family: 'Open Sans Condensed', arial,sans;">Ajouter une Promotion </h2> <div> </center><br><br>
       </div>
        <h4 style="color:black;font-family:Times New Roman, Times, serif;text-align:left;"> Type :</h4>
        <select style="width: 100%;
    padding: 16px 20px;
    border: blue;
    border-radius: 4px;
   " name="in1"> 
       <option style="font-family:Times New Roman, Times, serif;"> saisonier </option>
         <option> 2eme demarque </option>
          <option> 3eme demarque </option>
          <option> fin de stock </option>
        </select>
        <br><br>
        <h4 style="color:black;font-family:Times New Roman, Times, serif;"> Pourcentage : </h4>
        <br>
        <input  type="text" placeholder="pourcentage %" name="in2" onblur="queDesChiffres(this)" />
        <br><br>
        <h4 style="color:black;font-family:Times New Roman, Times, serif;">Nom : </h4>
        <input  type="text" placeholder="nom" name="in3" onblur="queDesLettres(this)"  rows="3"/>
        <br><br>
        <h4 style="color:black;font-family:Times New Roman, Times, serif;"> Date Debut :</h4>
        <input   type="date" name="in4" id="date" onblur="Commande()"/>
        <br><br> 
        <h4 style="color:black;font-family:Times New Roman, Times, serif;">Date Fin :</h4>
        <input  type="date" name="in5" class="form-style-8" />
        <br><br> 
        
        <br><br>  
        <center><button type="submit" class="btn btn-primary" >Valider</button></center>
        <input type="hidden" name="action" value="proajout">
        <input type="hidden" name="controller" value="promotion">
        </form>