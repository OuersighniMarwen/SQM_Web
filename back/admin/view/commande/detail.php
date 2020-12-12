

<div class="page-header">
    <h1>Liste De la ligne commande</h1>
</div>
   
    <br>
    <br>
    <br>

<div class="container">
    <div class="row">
        <div class="wusernameget-box wusernameget-color-blue">
            <table class="table table-striped table-bordered table-hover ">

                <tr>
                    
                     <th>la commande</th>
                     <th>produit</th>
                     <th>quatité</th>
                     <th>prix total</th>

                    
                
                </tr>
                <?php
                                    $N=1;

            
            
                                  foreach($commandes as $c){
                                    ?>
 
                    <tr>
                        
                         <td>
                            <?php echo $c['idCom']?>
                        </td>
                         <td>
                            <?php echo $c['refProd']?>
                        </td>
                        <td>
                            <?php echo $c['quantite']?>
                        </td>
                         <td>
                            <?php echo $c['prixTotal']?>
                        </td>
                        <td>
                            <form action="?controller=commande&action=afficher" method="POST">
                                <button type="submit"  value="retour" class="btn btn-danger" name="retour" ><i class="fa fa-chevron-left"></i></button>
                            </form>
                        </td>
                        

                      
                      
                        

                    </tr>
                    <?php
                                    }
                                    ?>

            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>

