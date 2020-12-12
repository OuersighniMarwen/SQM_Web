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
                
                <form action="?controller=livraison&action=savelivraison&id=<?php echo $_GET["id"] ?>" method="post">
                  <div class="col-xs-12">
                    <div class="page-header">

                      <h4>Choose your Delivery method</h4>
                    </div>
                  </div>
                  <div class="form-group col-sm-4 col-xs-12">
                    <label for="">Phone Number</label>
                    <input  type="text"  class="form-control" id="" name="numero" minlength="8" maxlength="8" required >
                    <br>
                    <br>
                    <br>
                    <label for="">Date</label>
                    
                      <input type="date"  class="form-control" id="" name="date" required>
                      <br>

                      <br>
                    <br>
                      <label for="">Adresse</label>
                    
                      <input type="text"  class="form-control" id="" name="adresse" required>
                                    
                    <br>
                     <label for="">Region</label>
                    
                      <input type="text"  class="form-control" id="" name="region" required>
                    <br>
                        
                    
                  
                    
                  </div>
                  <iframe src="https://www.google.tn/maps/place/Patisserie+Lobna/@36.8466435,10.1661957,19z/data=!4m5!3m4!1s0x0:0x2d3a4ddacbde7244!8m2!3d36.8467043!4d10.1659323?hl=en" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  <div class="col-xs-12">
                   
                  <div class="col-xs-12">
                    <div class="well well-lg clearfix">
                      <ul class="pager">
                     
                       <button  width="10" height="40" type="submit" class="btn btn-primary btn-block">Checkout</button>

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

<!-- Mirrored from themes.iamabdus.com/bigbag/1.1/checkout-step-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Mar 2017 23:15:35 GMT -->
</html>
             <?php } 
      else { ?>

<?php require_once("views/Client/signup-login.php"); } ?>