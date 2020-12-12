<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


      <section class="mainContent clearfix signUp">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-xs-12">
              <div class="panel panel-default">
                <div class="panel-heading"><h3>create an account</h3></div>
                <div class="panel-body">
                   <form action="?controller=client&action=saveClient" method="POST" role="form">
                    <div class="form-group">
                      <label for="">First Name</label>
                      <input type="text" name="fname" class="form-control" id="" required>
                    </div>
                    <div class="form-group">
                      <label for="">Last Name</label>
                      <input type="text" name="lname" class="form-control" id="" required>
                    </div>
                    <div class="form-group">
                      <label for="">Enter Email</label>
                      <input type="email" name="username" class="form-control" id="" required>
                    </div>
                      <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" name="phone" minlength="8"  maxlength="8" class="form-control" id="" required>
              </div>

                     <div class="form-group">
                <label for="">Adresse </label>
                <input type="text" name="adresse" class="form-control" id="" required>
              </div>                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Doit contenir au moins un numéro et une lettre majuscule et minuscule, et au moins 6 caractères ou plus " id="" required>
                    </div>
                     
               
                    <button type="submit" name="valide" class="btn btn-primary btn-block" onclick="controle()">Submit</button>

                    
                  </form>

                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xs-12">
              <div class="panel panel-default">
                <div class="panel-heading"><h3>allready registered?</h3></div>
                <div class="panel-body">
                  <form action="?controller=client&action=connect" method="POST" role="form">
                    <div class="form-group">
                      <label for="">Enter Email</label>
                      <input type="email" name="username" class="form-control" id="">
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" name="password" class="form-control" id="">
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember Me
                      </label>
                    </div>
                    <button type="submit" name="okk" class="btn btn-primary btn-block">log in</button>
                    
                    <button type="button" class="btn btn-link btn-block">Forgot Password?</button>
                  </form>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  