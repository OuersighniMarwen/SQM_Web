<script type="text/javascript" src="template/js/selectionner.js"></script>

<div class="page-header">
    <h1>Liste Des Produits</h1>
</div>
    <div class="nav-search" id="nav-search">
        <form class="form-search" action="?controller=produit&action=chercher" method="POST">
            <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off"  value="" name="reference">

                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
        </form>
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
                    <th> <input type="checkbox" name="check-all" id="check-all" onclick="checktout();" /> </th> 
                    <th>N°</th>
                    <th>reference</th>
                    <th> name</th>
                    <th>prix</th> 
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
                             <input type="checkbox" name="tab[<?php echo $N ?>][check]" class="tout"/>
                        </td>
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
                <button type="submit" class="btn btn-app btn-primary btn-sm" value="Modifier" name="supprimer">
                        Affecter la promotion 
                </button>               
          </form>

        </div>
    </div>
</div>
</div>
</div>
</div>

