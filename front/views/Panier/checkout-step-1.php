<?php if (isset($_SESSION['username']))
 { ?>
<br>
  <section class="lightSection clearfix pageHeader">
        <div class="container">
          <div class="row">
            <div class="col-xs-6">
              <div class="page-title">
                <h2>billing &amp; Shipping address</h2>
              </div>
            </div>
            <div class="col-xs-6">
              <ol class="breadcrumb pull-right">
                <li>
                  <a href="index-v1.html">Home</a>
                </li>
                <li class="active">billing &amp; Shipping address</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix stepsWrapper">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="innerWrapper clearfix stepsPage">
                <div class="row progress-wizard" style="border-bottom:0;">

                 
                  <div class="col-xs-3 progress-wizard-step active">
                    <div class="text-center progress-wizard-stepnum">Order</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a class="progress-wizard-dot"></a>
                  </div>

                  <div class="col-xs-6 progress-wizard-step disabled">
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
                      <h4>Order</h4>
                    </div>
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="">ID Commande : <?php  echo $_POST["ID"] ?></label>
                    
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="">Username : <?php  echo $_GET["username"] ?></label>
                    
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="">Total price : <?php  echo $_GET["PrixTot"] ?></label>
                    
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="">Date : <?php  echo $_POST["date"] ?></label>
                  </div>
              
                  <div class="col-xs-12">
                    <div class="well well-lg clearfix">
                      <ul class="pager">
                      <li class="previous"><a href="#" class="hideContent">back</a></li>
                        <li class="next"><a href="?controller=panier&action=confirmerCommande&id=<?php echo $_POST["ID"] ?>">checkout</a></li>
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
 

