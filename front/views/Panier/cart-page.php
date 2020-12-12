      <?php
if (isset($_SESSION['username']))
{
    echo 'username:'.$_SESSION['username'];
}
else {
echo 'no';
}
?>
<br>
      <!-- el bande el fou9aneya -->
      <section class="lightSection clearfix pageHeaderImage">
        <div class="container">
          <div class="tableBlock">
            <div class="row tableInner">
              <div class="col-xs-12">
                <div class="page-title">
                  <h2>Panier</h2>
                  <ol class="breadcrumb">
                    <li>
                      <a href="index-v1.html">Acceuil</a>
                    </li>
                    <li class="active">Panier</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     
      <!-- el tableau mta3 el panier -->
      <section class="mainContent clearfix cartListWrapper">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="cartListInner">
                <form action="#">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Product Name</th>
                          <th>Price</th>
                          <th>Size</th>
                          <th>Quantity</th>
                          <th>SubTotal</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                       <?php  
                        if(!isset($_SESSION["cart_item"]))
                          {
                           $_SESSION["cart_item"][]= array('reference','nom', 'prix' ,'size','quantite','subtot');
                          }
                            $item_total = 0;
                       ?>  
                        
                         <?php    
    foreach ($_SESSION["cart_item"] as $item){
    ?>
        <tr>
        <td class="col-xs-2"><strong><?php echo $item["reference"]; ?></strong></td>
        <td class="col-xs-2"><?php echo $item["nom"]; ?></td>
        <td class="col-xs-2"><?php echo $item["prix"]; ?></td>
        <td class="col-xs-2"><?php echo $item["size"]; ?></td>
        <td class="col-xs-2"><?php echo $item["quantite"]; ?></td>
        <td class="col-xs-2"><?php echo $item["subtot"]; ?></td>
        <td class="col-xs-2"><a role="button" class="btn-app btn-danger btn-sm" name="reference" href="?controller=panier&action=supprimerArticle&reference=<?php echo $item["reference"]; ?>"" ></td>
        </tr>
        <?php
        
        $item_total += ($item["prix"]*$item["quantite"]); 
    }
    ?>
                      </tbody>
                    </table>
                  </div>
                 
                  <div class="row totalAmountArea">
                    <div class="col-sm-4 col-sm-offset-8 col-xs-12">
                      <ul class="list-unstyled">
                        <li>Grand Total <span class="grandTotal"><?php  echo $item_total."DT"; ?></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="checkBtnArea">
                   <?php $username=$_SESSION['username'] ; ?>
                    <a href="?controller=panier&action=checkout1&PrixTot=<?php echo $item_total; ?>&username=<?php echo $username; ?>" class="btn btn-primary btn-block">checkout<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </section> 
      <a href="?controller=panier&action=supprimerPanier" role="button" class="btn btn-primary btn-block">Delete All<i class="fa fa-arrow-circle-right" aria-hidden="true" "></i></a>
      <a href="?controller=produits&action=index" role="button" name="retour" class="btn btn-primary btn-block">Show Products<i class="fa fa-arrow-circle-right" aria-hidden="true" "></i></a>
      <!--<?php echo $_SESSION["cart_item"][0]["quantite"] ; echo  $_SESSION["cart_item"][0]["prix"]; ?>-->
      <br><br><br><br><br><br><br><br><br><br><br>
    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../plugins/jquery-ui/jquery-ui.js"></script>
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="../plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="../plugins/owl-carousel/owl.carousel.js"></script>
    <script src="../plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
    <script src="../plugins/countdown/jquery.syotimer.js"></script>
    <script src="../options/optionswitcher.js"></script>
    <script src="../js/custom.js"></script>
    