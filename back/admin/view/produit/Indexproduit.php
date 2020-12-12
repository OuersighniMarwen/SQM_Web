

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

                <tr>
                    <th>N°</th>
                    <th>reference</th>
                    <th> name</th>
                    <th>prix</th> 
                    <th>stock</th> 
                    <th>designation</th> 
                    <th>solde</th> 
                    <th>image</th> 
                    <th>categorie</th>      
                    <th>Supprimer</th>
                    <th>Modifier</th>
                
                </tr>
                <?php
                                    $N=1;

            
            
                                  foreach($produits as $produit){
                                    ?>
                    <tr>
                        <td>
                            <?php echo $N++ ?>
                        </td>
                        <td>
                            <?php echo $produit['reference'] ?>
                        </td>
                       <td>
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
                       
                      
                        <td>
                            <form action="?controller=produit&action=supprimer" method="POST">
                                <button type="submit" class="btn btn-app btn-danger btn-sm" value=" Supprimer " name="supprimer">
                                    <i class="ace-icon fa fa-trash-o bigger-200"></i></button>
                                <input type="hidden" value="<?PHP echo $produit['reference'] ?>" name="reference" husernameden>
                            </form>
                        </td>
                           <td>
                            <form action="?controller=produit&action=Edit" method="POST">
                                <button type="submit" class="btn btn-app btn-primary btn-sm" value="Modifier" name="supprimer">
                                    <i class="ace-icon fa fa-pencil-square-o bigger-230"></i>
                                   <input type="hidden" value="<?PHP echo $produit['reference'] ?>" name="reference" husernameden>
                                </button>
                               
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

