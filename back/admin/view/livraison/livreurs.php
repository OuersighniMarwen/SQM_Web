

<div class="page-header">
    <h1>Liste Des livreurs</h1>
</div>
   
    <br>
    <br>
    <br>

<div class="container">
    <div class="row">
        <div class="wusernameget-box wusernameget-color-blue">
            <table class="table table-striped table-bordered table-hover ">

                <tr>
                    
                     <th>nom</th>
                     <th>region</th>

                    
                
                </tr>
                <?php
                                    $N=1;

            
            
                                  foreach($livreurs as $livreur){
                                    ?>
 
                    <tr>
                        
                         <td>
                            <?php echo $livreur['nom']?>
                        </td>
                         <td>
                            <?php echo $livreur['region']?>
                        </td>
                        <td>
                            <form action="?controller=livraison&action=afficher" method="POST">
                                <button type="submit"  value="retour" name="retour" class="btn btn-success" >jj</button>
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

