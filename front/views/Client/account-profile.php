<?php if (isset($_SESSION['username']))
 { ?>
<br>
      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix userProfile">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="btn-group" role="group" aria-label="...">
             
                <a class="btn btn-default active"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="innerWrapper profile">
                <div class="orderBox">
                  <h4>Update your profile</h4>
                </div>
                <div class="row">
  <?php
  $clients=  client::show($_SESSION['username']);
  foreach ($clients as $c) {
    # code...
  } ?>
                  <div class="col-md-10 col-sm-9 col-xs-12">
                      <form action="?controller=client&action=UpdateClient" method="post" class="form-horizontal">
                        <div class="form-group">
                          <label for="" class="col-md-2 col-sm-3 control-label">First Name</label>
                          <div class="col-md-10 col-sm-9">
                            <input type="text" name="fname" class="form-control" id="" value="<?php echo $c['fname'];?>" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="" class="col-md-2 col-sm-3 control-label">Last Name</label>
                          <div class="col-md-10 col-sm-9">
                            <input type="text" name="lname" class="form-control" id="" value="<?php echo $c['lname'];?>" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="" class="col-md-2 col-sm-3 control-label">Phone Number</label>
                          <div class="col-md-10 col-sm-9">
                            <input type="text" name="phone" minlength="8" maxlength="8" class="form-control" id="" value="<?php echo $c['phone'];?>" required>
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="" class="col-md-2 col-sm-3 control-label">Adresse</label>
                          <div class="col-md-10 col-sm-9">
                            <input type="text" name="adresse" class="form-control" id="" value="<?php echo $c['adresse'];?>" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="" class="col-md-2 col-sm-3 control-label">Email Address</label>
                          <div class="col-md-10 col-sm-9">
                            <input type="email" name="username" class="form-control" id=""  value="<?php echo $c['username'];?>" required >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="" class="col-md-2 col-sm-3 control-label">Password</label>
                          <div class="col-md-10 col-sm-9">
                            <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Doit contenir au moins un numéro et une lettre majuscule et minuscule, et au moins 6 caractères ou plus " class="form-control" id="" value="<?php echo $c['password'];?>" required>
                            <span class="show-password">afficher mot de passe</span>
                          </div>
                        </div>
                      
                        <div class="form-group">
                          <div class="col-md-offset-10 col-md-2 col-sm-offset-9 col-sm-3">
                            <button type="submit" class="btn btn-primary btn-block">SAVE INFO</button>
                          </div>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){

      $('.show-password').click(function() {
        if($(this).prev('input').prop('type') == 'password') {
          //Si c'est un input type password
          $(this).prev('input').prop('type','text');
          $(this).text('cacher mot de passe');
        } else {
          //Sinon
          $(this).prev('input').prop('type','password');
          $(this).text('afficher mot de passe');
        }
      });

    });
    </script>
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