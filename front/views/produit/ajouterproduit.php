

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
          <div class="row">
            <div class="col-xs-12">
              <form name="comment" action="?controller=produit&action=Ajouter" method="POST" role="form" class="commentsForm">
                <h3>Modifier Produit</h3>
                <div class="row">
                   <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      ref<input type="text" name="in1" class="form-control" id=""  disable>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                     nom <input type="text" class="form-control" name="in2" id="" >
                    </div>
                  </div>
                 
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                     prix <input type="number"  class="form-control" name="in3" rows="3" >
                    </div>    
                  </div>
                   <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                     stock <input type="text"  class="form-control" name="in4" rows="3" >
                    </div>
                  </div>
                 
                   <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                     solde <input type="text"  class="form-control" name="in6" rows="3" >
                    </div>
                  </div>
                   <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      image<input type="file" id="fileToUpdate"  class="form-control" name="fileToUpdate" rows="3" p>
                    </div>
                  </div>
                   <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      categorie<input type="text"  class="form-control" name="in8" rows="3" >
                    </div>
                  </div>
                    <div class="col-xs-12">
                    <div class="form-group">
                      designa<textarea class="form-control" name="in5" rows="3" ></textarea>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Update comment</button>
              </form>
            </div>
          </div>


