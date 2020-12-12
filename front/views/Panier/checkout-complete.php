<?php if (isset($_SESSION['username']))
 { ?>
<!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix setp5">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="thanksContent">
                <h2>Thank's  </h2>
                <h3>Details</h3>
                <div class="thanksInner">
                  <div class="row">
                  <?php $client=Panier::getclient($_SESSION["username"]) ;
                  foreach ($client as $client) 
                  {
                  ?>
                    <div class="col-sm-6 col-xs-12 tableBlcok">

                      <address>

                        <span>Email:</span>  <?php echo $_SESSION["username"]; ?><br>
                        <span>Adress:</span>  <?php echo $client["adresse"]; ?><br>
                        <span>Phone Number:</span> <?php echo $client["phone"]; }?>

                        <?php  require_once("models/livraison.php");
                          $livraisons = livraison::show($_SESSION['username']);

                          foreach ($livraisons as $liv ) {
                            # code...
                          
                      ?>
                      <?php }?>

                      
                    </div>
                        <address>
                        <div class="col-sm-6 col-xs-12">
                      <div class="well">
                        <h2><small>Order ID</small><?php echo $_GET["id"]?></h2>
                      </div></div>
                          <span>Delivery Number:</span><?php echo $liv['id_livraison'] ?><br>
                         <span> Number :</span><?php echo $liv['numero'] ?> <br>
                         <span>Date: </span><?php echo $liv['date'] ?> <br>
                         <span>Your Adresse : </span><?php echo $liv['adresse'] ?> <br>
                         <span>Delivered by:</span> <?php echo $liv['username'] ?><br>
                         <span>region: </span><?php echo $liv['region'] ?><br>
                         <?php $cout=livraison::show1($liv['region'])?>
                          <?php 
                          

                          foreach ($cout as $cout ) { $s=$cout["cout"];
                            # code...
                          
                      ?>
                      <?php }?>
                       <!--  <span>Cost of delivery:</span>< //?php echo $s ?>-->


                      </address>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     

    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.js"></script>
    <script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
    <script src="plugins/countdown/jquery.syotimer.js"></script>
    <script src="options/optionswitcher.js"></script>
    <script src="js/custom.js"></script>

             <?php } 
      else { ?>

<?php require_once("views/Client/signup-login.php"); } ?>
 

