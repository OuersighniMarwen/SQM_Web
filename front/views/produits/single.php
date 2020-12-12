<?php if (isset($_SESSION['username']))
 { ?>
      
      <!-- LIGHT SECTION -->
      <section class="lightSection clearfix pageHeader">
        <div class="container">
          <div class="row">
            <div class="col-xs-6">
              <div class="page-title">
                <h2>Single Product</h2>
              </div>
            </div>
            <div class="col-xs-6">
              <ol class="breadcrumb pull-right">
                <li>
                  <a href="index.html">Home</a>
                </li>
                <li class="active">Single Product</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
      <?php
      $N=1;
      foreach($produits as $produit){
      ?>


      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix">
        <div class="container">
          <div class="row singleProduct">
            <div class="col-xs-12">
              <div class="media">
                <div class="media-left productSlider">
                  <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="item active" data-thumb="0">
                        <img src="images_produits/<?php echo $produit['image']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media-body">
                  <ul class="list-inline">
                    <li><a href="index.html"><i class="fa fa-reply" aria-hidden="true"></i>Continue Shopping</a></li>
                    <li><a href="#"><i class="fa fa-plus" aria-hidden="true"></i>Share This</a></li>
                  </ul>
                  <h2> <?php echo $produit['nom'] ?></h2>
                  <h3>$<?php echo $produit['prix'] ?></h3>

                  <form action="?controller=panier&action=Editpanier&reference=<?php echo $_GET['reference'] ?>" method="POST" role="form">
                  <span class="quick-drop">
                   <select name="size" id="size" class="select-drop">
                      <option value="0">Size</option>
                      <option value="Small">Small</option>
                      <option value="Medium">Medium</option>
                      <option value="Big">Big</option>            
                    </select>
                  </span>
                  <span class="quick-drop resizeWidth">
                    <select name="quantite" id="quantite" class="select-drop">
                      <option value="0">Qty</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>            
                    </select>
 
                  </span>
              
                  <div>
                    <?php //echo $_POST['rate'] ?>






                  </div>
                  <div class="btn-area">
                   <button type="submit" name="okk" class="btn btn-primary btn-block">Add to cart </button>
                  </div>
                  </form>
                  <div class="tabArea">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#details">details</a></li>
                      
                   
                    </ul>
                    <p><?php echo $produit['designation'] ?></p>



<form name="commt" method="POST">
<h5> Comment:</h5>
<input hidden name="controller" value="document"/>
<input hidden name="action" value="comment"/>
<textarea name="commen" rows="6" cols="70" ></textarea>
<input hidden name="id" value="<?php echo $produit['reference'] ?>">
<div class="btn-area">
 <button type="submit" name="okk" class="btn btn-primary btn-block">Add Comment </button>
 </div>
</form>

                    <div class="tab-content">
                      <div id="details" class="tab-pane fade in active">
                        
                        
                      </div>
                      <div id="about-art" class="tab-pane fade">
                        <p>Nulla facilisi. Mauris efficitur, massa et iaculis accumsan, mauris velit ultrices purus, quis condimentum nibh dolor ut tortor. Donec egestas tortor quis mattis gravida. Ut efficitur elit vitae dignissim volutpat. </p>
                      </div>
                      <div id="sizing" class="tab-pane fade">
                        <p>Praesent dui felis, gravida a auctor at, facilisis commodo ipsum. Cras eu faucibus justo. Nullam varius cursus nisi, sed elementum sem sagittis at. Nulla tellus massa, vestibulum a commodo facilisis, pulvinar convallis nunc.</p>
                      </div>
                      <div id="shipping" class="tab-pane fade">
                        <p>Mauris lobortis augue ex, ut faucibus nisi mollis ac. Sed volutpat scelerisque ex ut ullamcorper. Cras at velit quis sapien dapibus laoreet a id odio. Sed sit amet accumsan ante, eu congue metus. Aenean eros tortor, cursus quis feugiat sed, vestibulum vel purus.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <?php } ?>

                  <?php } 
      else { ?>

<?php require_once("views/Client/signup-login.php"); } ?>