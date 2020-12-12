<?php
  foreach ($clients as $client)
    {$mdp=$client['password'];}
$to       = 'mohamed.bayoudh@esprit.tn';
$subject  = 'Mot de passe oublier';
$message  = 'Bonjour client ,vous avez oublié votre mot de passe ?
 rien n est grave votre mot de passe est :'.$mdp ;
$headers  = 'From: [your_gmail_account_username]@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
?>



      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix lostPassword">
        <div class="container">
       
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
              <div class="panel panel-default">
                <div class="panel-heading"><h3>Lost Password</h3></div>
                <div class="panel-body">
                  <form action="#" method="POST" role="form">
                    <p class="help-block">thank you for the registration , Check your mail to connect.</p>
                    
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </section>
      
