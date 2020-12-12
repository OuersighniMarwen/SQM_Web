
      
    
          <div class="row">
            <div class="col-xs-12">
                 <form method="get">
        <center> <h2 style="color:#3CBC8D;width:500px;font-family: 'Open Sans Condensed', arial,sans;">Ajouter un evenement </h2> </center><br><br>
       
        
       
         <h4 style="color:black;font-family:Times New Roman, Times, serif;"> Nom: </h4>
        <input type="text" name="in3" onblur="queDesLettres(this)"/>
        <br><br>
        <h4 style="color:black;font-family:Times New Roman, Times, serif;"> Date Debut :</h4>
        <input type="date" name="in1" id="date" onblur="Commande()"/>
        <br><br> 
        <h4 style="color:black;font-family:Times New Roman, Times, serif;"> Date Fin : </h4>
        <input type="date" name="in2"/>
        <br><br>  
        <br><br>  
        <center><button type="submit" class="btn btn-primary" >Valider</button></center>
        <input type="hidden" name="action" value="evajout">
        <input type="hidden" name="controller" value="evenement">
        </form>
            </div>
          </div>
       