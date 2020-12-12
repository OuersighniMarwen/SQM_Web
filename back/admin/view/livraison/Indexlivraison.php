
<meta charset="utf-8">
<div class="page-header">
    <h1>Liste Des livraisons</h1>
</div>
    <div class="nav-search" id="nav-search">
        <form class="form-search" action="?controller=livraison&action=chercher" method="POST">
            <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off"  value="" name="id_livraison">

                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>

        </form>
    </div>
    <br>
    <br>
    <br>
    nombre total des livraisons:
     <?php
            $notification1=config::getInstance()->conn->query('select   count(*) from livraison ');
  while($SingleLine4 = $notification1->fetch()) {echo "".$SingleLine4["count(*)"]."";}
     ?>

    <br>
    <br>
    <br>
    nombre des livraisons non traitées:
     <?php
            $notification=config::getInstance()->conn->query('select   count(*) from livraison where etat="non traitee"');
  while($SingleLine4 = $notification->fetch()) {echo "".$SingleLine4["count(*)"]."";}
     ?>
    <br>
    <br>
    <br>

<div class="container">
    <div class="row">
        <div class="wusernameget-box wusernameget-color-blue">
            <table class="table table-striped table-bordered table-hover ">

                <tr>
                    <th>N°</th>
                    <th>Id livraison</th>
                    <th>username</th>
                    <th>numero</th>
                    <th>Date</th>
                     <th>adresse</th>
                     <th>etat</th>
                     <th>region</th>

                    <th>Supprimer</th>
                    <th>Update</th>
                
                </tr>
                <?php
                                    $N=1;

            
            
                                  foreach($livraisons as $livraison){
                                    ?>
 
                    <tr>
                        <td>
                            <?php echo $N++ ?>
                        </td>
                        <td>
                            <?php echo $livraison['id_livraison'] ?>
                        </td>
                       <td>
                            <?php echo $livraison['username'] ?>
                        </td>
                        <td>
                            <?php echo $livraison['numero'] ?>
                        </td>
                        <td>
                            <?php echo $livraison['date']?>
                        </td>
                         <td>
                            <?php echo $livraison['adresse']?>
                        </td>
                         <td>
                            <?php echo $livraison['etat']?>
                        </td>
                         <td>
                            <?php echo $livraison['region']?>
                        </td>
                        

                      
                      
                        <td>
                            <form action="?controller=livraison&action=supprimer" method="POST">
                                <button type="submit" class="btn btn-app btn-danger btn-sm" value=" Supprimer " name="supprimer">
                                    <i class="ace-icon fa fa-trash-o bigger-200"></i></button>
                                <input type="hidden" value="<?PHP echo $livraison['id_livraison'] ?>" name="id_livraison" husernameden>
                            </form>
                        </td>
                        <td>
                            <form action="?controller=livraison&action=Edit" method="POST">
                                <button type="submit" class="btn btn-app btn-primary btn-sm" value="Modifier" name="supprimer">
                                    <i class="ace-icon fa fa-pencil-square-o bigger-230"></i>
                                   <input type="hidden" value="<?PHP echo $livraison['id_livraison'] ?>" name="id_livraison" husernameden>
                                </button>
                               
                            </form>
                        </td>
                        <td>
                            <form action="?controller=livreur&action=affichage1" method="POST">
                                                        
                                 <input type="hidden" value="<?php echo $livraison['region'] ?>" name="region">
                                <button type="submit" value="livreur" name="livreur" class="btn btn-primary btn-block">livreur</button></br>
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

