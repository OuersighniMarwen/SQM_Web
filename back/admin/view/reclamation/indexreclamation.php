

<div class="page-header">
    <h1>Liste Des reclamations</h1>
</div>
    <div class="nav-search" id="nav-search">
        <form class="form-search" action="?controller=reclamation&action=chercher" method="POST">
            <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off"  value="" name="id_reclamation">

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
                    <th>Id reclamation</th>
                    <th>username</th>
                    <th>type</th>
                    <th>text</th>
                   

                    <th>Supprimer</th>
                   
                
                </tr>
                <?php
                                    $N=1;

            
            
                                  foreach($reclamations as $reclamation){
                                    ?>
 
                    <tr>
                        <td>
                            <?php echo $N++ ?>
                        </td>
                        <td>
                            <?php echo $reclamation['id_reclamation'] ?>
                        </td>
                       <td>
                            <?php echo $reclamation['username'] ?>
                        </td>
                        <td>
                            <?php echo $reclamation['type'] ?>
                        </td>
                        <td>
                            <?php echo $reclamation['texte']?>
                        </td>
                       
                      
                      
                        <td>
                            <form action="?controller=reclamation&action=supprimer" method="POST">
                                <button type="submit" class="btn btn-app btn-danger btn-sm" value=" Supprimer " name="supprimer">
                                    <i class="ace-icon fa fa-trash-o bigger-200"></i></button>
                                <input type="hidden" value="<?PHP echo $reclamation['id_reclamation'] ?>" name="id_reclamation" husernameden>
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

