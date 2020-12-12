<?php if (isset($_SESSION['username']))
 { ?>
<br>

    <!--=== option Switcher ===-->
   
        <!-- Theme Colors -->
      
        <!-- Layout Styles -->
        
        <!-- Background pattern -->
        <div class="bg-patern">
          <h3>Background pattern</h3>
          <ul class="list-unstyled">
            <li class="pattern-default pattern-active"></li>
            <li class="pattern1"></li>
            <li class="pattern2"></li>
            <li class="pattern3 last"></li>
            <li class="pattern4"></li>
            <li class="pattern5"></li>
            <li class="pattern6"></li>
            <li class="pattern7 last"></li>
          </ul>
        </div>              


      
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
                        <img src="1.1/img/products/signle-product/product-slide-big-01.jpg">
                      </div>
                      <div class="item" data-thumb="1">
                        <img src="1.1/img/products/signle-product/product-slide-big-02.jpg">
                      </div>
                      <div class="item" data-thumb="2">
                        <img src="1.1/img/products/signle-product/product-slide-big-03.jpg">
                      </div>
                      <div class="item" data-thumb="3">
                        <img src="1.1/img/products/signle-product/product-slide-big-04.jpg">
                      </div>
                    </div>
                  </div> 
                  <div class="clearfix">
                    <div id="thumbcarousel" class="carousel slide" data-interval="false">
                      <div class="carousel-inner">
                          <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="1.1/img/products/signle-product/product-slide-small-01.jpg"></div>
                          <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="1.1/img/products/signle-product/product-slide-small-02.jpg"></div>
                          <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="1.1/img/products/signle-product/product-slide-small-03.jpg"></div>
                          <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="1.1/img/products/signle-product/product-slide-small-04.jpg"></div>
                      </div>
                      <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
                      <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="media-body">
                  <ul class="list-inline">
                    <li><a href="index.html"><i class="fa fa-reply" aria-hidden="true"></i>Continue Shopping</a></li>
                    <li><a href="#"><i class="fa fa-plus" aria-hidden="true"></i>Share This</a></li>
                  </ul>
                  <h2>Pellentesque non risus quis tellus</h2>
                  <h3>$149</h3>
                  <p>Mauris lobortis augue ex, ut faucibus nisi mollis ac. Sed volutpat scelerisque ex ut ullamcorper. Cras at velit quis sapien dapibus laoreet a id odio. Sed sit amet accumsan ante, eu congue metus. Aenean eros tortor, cursus quis feugiat sed, vestibulum vel purus. Etiam aliquam turpis quis blandit finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor placerat lectus, facilisis ornare leo tincidunt vel. Duis rutrum felis felis, eget malesuada massa tincidunt a.</p>
                  <form action="?controller=panier&action=Editpanier" method="POST" role="form">
                  <span class="quick-drop"> REF :
                  <input class="form-control" type="text" name="reference" id="reference" >
                  </span>
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
                  <div class="btn-area">
                    <button type="submit" name="okk" class="btn btn-primary btn-block">Add to cart </button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

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
 

