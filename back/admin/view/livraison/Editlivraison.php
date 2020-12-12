

<div class="page-header">
    <h1>Liste Des livraisons</h1>
</div>
    <div class="nav-search" id="nav-search">
        <form class="form-search" action="?controller=livraison&action=chercher" method="POST">
            <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off"  value="" name="name">

                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
        </form>
                <?php                      
        foreach($livraisons as $livraison){
           ?>
          <div class="row">
            <div class="col-xs-12">
              <form name="comment" action="?controller=livraison&action=Update" method="POST" role="form" class="commentsForm">
                <h3>update  Comments</h3>
                <div class="row">
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="in1" id="" value=" <?php echo $livraison['id_livraison'] ?>" >
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="in2" id="" value=" <?php echo $livraison['username'] ?>" >
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="text" name="in3" class="form-control" id="" value="<?php echo $livraison['numero'] ?>" >
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                      <input type="text" name="in4" class="form-control" id="" value="<?php echo $livraison['date'] ?>" >
                    </div>
                  </div>

                    <div class="col-xs-12">
                    <div class="form-group">
                      <input type="text" name="in5" class="form-control" id="" value="<?php echo $livraison['adresse'] ?>" >
                    </div>
                  </div>
                    <div class="col-xs-12">
                    <div class="form-group">
                      <input type="text" name="in6" class="form-control" id="" value="<?php echo $livraison['etat'] ?>" >
                    </div>

                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                      <input type="text" name="in7" class="form-control" id="" value="<?php echo $livraison['region'] ?>" >

                    </div>
                    
                  </div>
                   <?php
                                    }
                                    ?>
                                       
                </div>
                <button type="submit" class="btn btn-primary">Update livraison</button>
              </form>
            </div>
          </div>


