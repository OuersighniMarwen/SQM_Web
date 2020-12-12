<?php if (isset($_SESSION['username']))
 { ?> 
      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix stepsWrapper">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="innerWrapper clearfix stepsPage">
                <div class="row progress-wizard" style="border-bottom:0;">

                
                  <div class="col-xs-3 progress-wizard-step complete fullBar">
                    <div class="text-center progress-wizard-stepnum">Order</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a class="progress-wizard-dot"></a>
                  </div>

                  <div class="col-xs-6 progress-wizard-step active">
                    <div class="text-center progress-wizard-stepnum">Delivery</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a class="progress-wizard-dot"></a>
                  </div>

                

                  <div class="col-xs-3 progress-wizard-step disabled">
                    <div class="text-center progress-wizard-stepnum">Review</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="checkout-step-4.html" class="progress-wizard-dot"></a>
                  </div>
                </div>
                
                <form action="#" class="row" method="POST" role="form">
                  <div class="col-xs-12">
                    <div class="page-header">
                      <h4>order review</h4>
                    </div>
                  </div>
                 
                  <div class="col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">Shipping Address</h4>
                      </div>
                      <?php 
                          $livraisons = livraison::show($_SESSION['username']);

                          foreach ($livraisons as $liv ) {
                          	# code...
                          
                      ?>
                      <?php }?>

                      <div class="panel-body">
                        <address>
                        <center>
                          <strong>Number of delivery:<?php echo $liv['id_livraison'] ?></strong><br>
                         Phone Number :<?php echo $liv['numero'] ?> <br>
                         Date: <?php echo $liv['date'] ?> <br>
                         Adress: <?php echo $liv['adresse'] ?> <br>
                         Delivered by: <?php echo $liv['username'] ?><br>
                         Region: <?php echo $liv['region'] ?><br>
                         <?php $cout=livraison::show1($liv['region'])?>
                          <?php 
                          

                          foreach ($cout as $cout ) { $c=$cout["cout"];
                          	# code...
                          
                      ?>
                      <?php }?>
                       <!--  cout de la livraison:<?php// echo $c ?>-->



                        </address>
                        </center>
                      </div>
                    </div>
                  </div>
              
                  <div class="col-xs-12">
                    <div class="well well-lg clearfix">
                      <ul class="pager">
                      
                        <li class="next"><a href="?controller=panier&action=checkoutCOMPLETE&id=<?php echo $_GET["id"] ?>">Confirm</a></li>
                      </ul>
                    </div>
                  </div>
                </form>
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
 

