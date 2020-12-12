<script type="text/javascript" src="template/js/selectionner.js"></script>

<div class="page-header">
    <h5>Liste Des Produits qui sont sur cette promotion</h5>
</div>
    <div class="nav-search" id="nav-search">
       
    </div>
    <br>
    <br>
    <br>


<div class="container">
    <div class="row">
        <div class="wusernameget-box wusernameget-color-blue">
            <table class="table table-striped table-bordered table-hover ">
              <form action="?controller=promotion&action=proproduit" method="POST">
                <tr>
                   
                    <th>N°</th>
                    <th>reference</th>
                    <th> name</th>
                    <th>prix initiale </th>  
                    <th>prix en promotion</th> 

                    <th>stock</th> 
                    <th>designation</th> 
                    <th>solde</th> 
                    <th>image</th> 
                    <th>categorie</th>      
                    
                
                </tr>
                <?php
                                    $N=1;

            
            
                                  foreach($produits as $produit){
                                    ?>
                    <tr>
                        
                        <td>
                            <?php echo $N ?>
                        </td>
                        <td>
                            <input type="hidden" name="tab[<?php echo $N ?>][reference]" value="<?php echo $produit['reference'];?>"/>
                            <?php echo $produit['reference'] ?>
                        </td>
                       <td>
                             <input type="hidden" name="tab[<?php echo $N ?>][nom]" value="<?php echo $produit['nom'];?>"/>
                            <?php echo $produit['nom'] ?>
                        </td>
                        <td>
                            <?php echo $produit['prix'] ?>
                        </td>
                        <td>

                            <?php echo promotion::calculprix($pourcent,$produit['prix']); ?>
                        </td>
                         <td>
                            <?php echo $produit['stock'] ?>
                        </td>
                         <td>
                            <?php echo $produit['designation'] ?>
                        </td>
                         <td>
                            <?php echo $produit['solde'] ?>
                        </td>
                         <td>
                            <img src="images_produits/<?php echo $produit['image']; ?>" > 
                        </td>
                          <td>
                            <?php echo $produit['categorie'] ?>
                        </td>
                       
                      
                       
                           
                            
                        
                    </tr>
                    <?php
                     $N++;
                   }

                                    ?>
 
            </table>
               
               <input type="hidden" name="proID" value="<?php echo $_POST['proID']; ?>"/>

                <input type="hidden" name="propourcentage" value="<?php echo $_POST['propourcentage']; ?>"/>

                 <input type="hidden" name="pronom" value="<?php echo $_POST['pronom']; ?>"/>

                  <input type="hidden" name="prodebut" value="<?php echo $_POST['prodebut']; ?>"/>

                   <input type="hidden" name="profin" value="<?php echo $_POST['profin']; ?>"/>

                    <input type="hidden" name="protype" value="<?php echo $_POST['protype']; ?>"/>
                            
          </form>

        </div>
    </div>
</div>
</div>
</div>
</div>

