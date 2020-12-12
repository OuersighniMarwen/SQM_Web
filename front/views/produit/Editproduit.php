

<div class="page-header">
    <h1>Liste Des Clients</h1>
</div>
    <div class="nav-search" id="nav-search">
        <form class="form-search" action="?controller=produit&action=chercher" method="POST">
            <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off"  value="" name="reference">

                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
        </form>
                <?php                      
        foreach($produits as $produit){
           ?>
          <div class="row">
            <div class="col-xs-12">
              <form name="comment" action="?controller=produit&action=Update" method="POST" role="form" class="commentsForm">
                <h3>Modifier Produit</h3>
                <div class="row">
                   <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      ref<input type="text" name="in1" class="form-control" id="" value="<?php echo $produit['reference'] ?>" disable>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                     nom <input type="text" class="form-control" name="in2" id="" placeholder=" <?php echo $produit['nom'] ?>" >
                    </div>
                  </div>
                 
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                     prix <input type="text"  class="form-control" name="in3" rows="3" placeholder="<?php echo $produit['prix'] ?>">
                    </div>    
                  </div>
                   <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                     stock <input type="text"  class="form-control" name="in4" rows="3" placeholder="<?php echo $produit['stock'] ?>">
                    </div>
                  </div>
                 
                   <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                     solde <input type="text"  class="form-control" name="in6" rows="3" placeholder="<?php echo $produit['solde'] ?>">
                    </div>
                  </div>
                   <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      image<input type="text"  type="file" id="fileToUpdate"  class="form-control" name="fileToUpdate" rows="3" >
                    </div>
                  </div>
                   <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      categorie<input type="text"  class="form-control" name="in8" rows="3" placeholder="<?php echo $produit['categorie'] ?>">
                    </div>
                  </div>
                    <div class="col-xs-12">
                    <div class="form-group">
                      designa<textarea class="form-control" name="in5" rows="3" placeholder="<?php echo $produit['designation'] ?>"></textarea>
                    </div>
                  </div>
                   <?php
                                    }
                                    ?>

                </div>
                <button type="submit" class="btn btn-primary">Update comment</button>
              </form>
            </div>
          </div>


