
        <div class="clearfix"></div>

	    </div>
        <form method="get">
        <div class="page-header">
        <center> <div> <h2 style="color:red;width:500px;font-family: 'Open Sans Condensed', arial, sans;">Ajouter une Promotion </h2> <div> </center><br><br>
       </div>
        Type :
        <select name="in1"> 
       <option> saisonier </option>
         <option> 2eme demarque </option>
          <option> 3eme demarque </option>
          <option> fin de stock </option>
        </select>
        <br><br>
        Pourcentage :
        <input type="text" placeholder="pourcentage %" name="in2" onblur="queDesChiffres(this)" />%
        <br><br>
        Nom :
        <input type="text" placeholder="nom" name="in3" onblur="queDesLettres(this)"  rows="3"/>
        <br><br>
        Date Debut :
        <input type="date" name="in4" id="date" onblur="Commande()"/>
        <br><br> 
        Date Fin :
        <input type="date" name="in5" class="form-style-8" />
        <br><br> 
        
        <br><br>  
        <center><button type="submit" class="btn btn-primary" >Valider</button></center>
        <input type="hidden" name="action" value="proajout">
        <input type="hidden" name="controller" value="promotion">
        </form>
            </div>
            </div>
          </div>
        </div>
		  </div>
    </div>
   <div class="clearfix"></div>