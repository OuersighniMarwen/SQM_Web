

<div class="page-header">
    <h1>Liste Des commandes</h1>
</div>
    <div class="nav-search" id="nav-search">
        <form class="form-search" action="?controller=commande&action=chercher" method="POST">
            <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off"  value="" name="id">

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
                    <th>Id </th>
                    <th>username</th>
                    <th>prixTotal</th>
                    <th>date </th>
                    <th> etat </th>

                    <th>Supprimer</th>
                    <th>Update</th>
                    <th>detail</th>


                   
                
                </tr>
                <?php
                                    $N=1;

            
            
                                  foreach($commandes as $commande){
                                    ?>
 
                    <tr>
                        <td>
                            <?php echo $N++ ?>
                        </td>
                        <td>
                            <?php echo $commande['id'] ?>
                        </td>
                       <td>
                            <?php echo $commande['username'] ?>
                        </td>
                        <td>
                            <?php echo $commande['prixTotal'] ?>
                        </td>
                        <td>
                            <?php echo $commande['date']?>
                        </td>
                        <td>
                            <?php echo $commande['etat']?>
                        </td>
                      
                      
                        <td>
                            <form action="?controller=commande&action=supprimer" method="POST">
                                <button type="submit" class="btn btn-app btn-danger btn-sm" value=" Supprimer " name="supprimer">
                                    <i class="ace-icon fa fa-trash-o bigger-200"></i></button>
                                <input type="hidden" value="<?PHP echo $commande['id'] ?>" name="id" husernameden>
                            </form>
                        </td>
                        <td>
                            <form action="?controller=commande&action=Edit" method="POST">
                                <button type="submit" class="btn btn-app btn-primary btn-sm" value="Modifier" name="supprimer">
                                    <i class="ace-icon fa fa-pencil-square-o bigger-230"></i>
                                   <input type="hidden" value="<?PHP echo $commande['id'] ?>" name="id" husernameden>
                                </button>
                               
                            </form>
                        </td>
                        <td>
                            <form action="?controller=commande&action=affichage" method="POST">
                                <button type="submit" value="detail" name="detail" class="btn btn-primary btn-block">                   <i class="ace-icon fa fa-pencil-square-o bigger-230"></i>
                            <input type="hidden" value="<?PHP echo $commande['id'] ?>" name="id" husernameden>

                            </button>

                                    
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

