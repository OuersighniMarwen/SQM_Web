
<?PHP
include "../database.php";

$crud = new cruddocument();
$reponse=$crud->afficheClient($crud->conn);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ashobiz.dreamhosters.com/wrapbootstrap/mac531/macadmin/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Mar 2017 16:49:44 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Tables - MacAdmin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">


  <!-- Stylesheets -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css"> 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="css/jquery-ui.css"> 
  <!-- Calendar -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="css/prettyPhoto.css">  
  <!-- Star rating -->
  <link rel="stylesheet" href="css/rateit.css">
  <!-- Date picker -->
  <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
  <!-- CLEditor -->
  <link rel="stylesheet" href="css/jquery.cleditor.css">  
  <!-- Data tables -->
  <link rel="stylesheet" href="css/jquery.dataTables.css">
  <!-- Bootstrap toggle -->
  <link rel="stylesheet" href="css/jquery.onoff.css">
  <!-- Main stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="css/widgets.css" rel="stylesheet">   
  
  <script src="js/respond.min.js"></script>
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">
  
    <div class="conjtainer">
      <!-- Menu button for smallar screens -->
      <div class="navbar-header">
		  <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			<span>Menu</span>
		  </button>
		  <!-- Site name for smallar screens -->
		  <a href="index-2.html" class="navbar-brand hidden-lg">MacBeth</a>
		</div>
      
      

      <!-- Navigation starts -->
     

        <!-- Search form -->
        <form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
        <!-- Links -->
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown pull-right">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-user"></i> Admin <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
          </li>
          
        </ul>
      </nav>

    </div>
  </div>


<!-- Header starts -->
  <header>
    <div class="container">
      <div class="row">

        <!-- Logo section -->
        <div class="col-md-4">
          <!-- Logo. -->
          <div class="logo">
            <h1><a href="#">En<span class="bold">Joy</span></a></h1>
            
          </div>
          <!-- Logo ends -->
        </div>



        <!-- Data section -->

        <div class="col-md-4">
          <div class="header-data">

            <!-- Traffic data -->
            <div class="hdata">
              <div class="mcol-left">
                <!-- Icon with red background -->
                <i class="fa fa-signal bred"></i> 
              </div>
              <div class="mcol-right">
                <!-- Number of visitors -->
                <p><a href="#">7000</a> <em>visits</em></p>
              </div>
              <div class="clearfix"></div>
            </div>

            <!-- Members data -->
            <div class="hdata">
              <div class="mcol-left">
                <!-- Icon with blue background -->
                <i class="fa fa-user bblue"></i> 
              </div>
              <div class="mcol-right">
                <!-- Number of visitors -->
                <p><a href="#">3000</a> <em>users</em></p>
              </div>
              <div class="clearfix"></div>
            </div>

            <!-- revenue data -->
            <div class="hdata">
              <div class="mcol-left">
                <!-- Icon with green background -->
                <i class="fa fa-money bgreen"></i> 
              </div>
              <div class="mcol-right">
                <!-- Number of visitors -->
                <p><a href="#">5000</a><em>orders</em></p>
              </div>
              <div class="clearfix"></div>
            </div>                        

          </div>
        </div>

      </div>
    </div>
  </header>

<!-- Header ends -->

<!-- Main content starts -->

<div class="content">

  	<!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          <li><a href="index-2.html"><i class="fa fa-home"></i> Dashboard</a>
            <!-- Sub menu markup 
            <ul>
              <li><a href="#">Submenu #1</a></li>
              <li><a href="#">Submenu #2</a></li>
              <li><a href="#">Submenu #3</a></li>
            </ul>-->
          </li>
          <li class="has_sub"><a href="#"><i class="fa fa-list-alt"></i> Widgets  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="widgets1.html">Widgets #1</a></li>
              <li><a href="widgets2.html">Widgets #2</a></li>
              <li><a href="widgets3.html">Widgets #3</a></li>
            </ul>
          </li>  
          <li class="has_sub"><a href="#"><i class="fa fa-file-o"></i> Pages #1  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="post.html">Post</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="register.html">Register</a></li>
              <li><a href="support.html">Support</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
          </li> 
          <li class="has_sub"><a href="#"><i class="fa fa-file-o"></i> Pages #2  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="media.html">Media</a></li>
              <li><a href="statement.html">Statement</a></li>
              <li><a href="error.html">Error</a></li>
              <li><a href="error-log.html">Error Log</a></li>
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="grid.html">Grid</a></li>
            </ul>
          </li>  
		  <li class="has_sub open"><a href="#"><i class="fa fa-table"></i> Tables  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li class="current"><a href="tables.html">Tables</a></li>
              <li><a href="dynamic-tables.html">Dynamic Tables</a></li>
            </ul>
          </li>		  
          <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i> Charts</a></li> 
          <li><a href="forms.php"><i class="fa fa-tasks"></i> Forms</a></li>
          <li><a href="ui.html"><i class="fa fa-magic"></i> User Interface</a></li>
        </ul>
    </div>

    <!-- Sidebar ends -->

  	<!-- Main bar -->
  	<div class="mainbar">

      <!-- Page heading -->
      <div class="page-head">
        <h2 class="pull-left"><i class="fa fa-table"></i> Tables</h2>

        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="index-2.html"><i class="fa fa-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Dashboard</a>
        </div>

        <div class="clearfix"></div>

      </div>
      <!-- Page heading ends -->

	    <!-- Matter -->

	    <div class="matter">
        <div class="container">

          <!-- Table -->

            <div class="row">

              <div class="col-md-12">

                <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
						  <thead>
							<tr>
							  <th>Username</th>
							  <th>First Name</th>
							  <th>Last Name</th>
							  <th>Phone</th>
							  <th>Adresse</th>
                <th>Delete</th>
							</tr>
						  </thead>
						  <tbody>
							<?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
            foreach ($reponse as $donnees)
            {
            ?>
                <tr>
                    <th><?php echo $donnees['username'];?></th>
                    <th><?php echo $donnees['fname'];?></th>
                    <th><?php echo $donnees['lname'];?></th>
                    <th><?php echo $donnees['phone'];?></th>  
                    <th><?php echo $donnees['adresse'];?></th>  
                   
          
          <form action="../supprimerClient.php"><th><a href="../supprimerClient.php?username=<?PHP echo $donnees['username']; ?>" ><input type="button" name="supprimer" value="supprimer"/></th></form>
          
                    
                </tr>
            <?php
            } //fin de la boucle, le tableau contient toute la BDD
            
            ?>                                                              
						  </tbody>
						</table>
					</div>
					
                    <div class="widget-foot">

                      
                        <ul class="pagination pagination-sm pull-right">
                          <li><a href="#">Prev</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                      
                      <div class="clearfix"></div> 

                    </div>

                  </div>
                </div>



                <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
						  <thead>
							<tr>
							  <th>#</th>
							  <th>Name</th>
							  <th>Location</th>
							  <th>Date</th>
							  <th>Type</th>
							  <th>Status</th>
							  <th>Control</th>
							</tr>
						  </thead>
						  <tbody>

							<tr>
							  <td>1</td>
							  <td>Ravi Kumar</td>
							  <td>India</td>
							  <td>23/12/2012</td>
							  <td>Paid</td>
							  <td><span class="label label-success">Active</span></td>
							  <td>

								  <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
								  <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
								  <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
							  
							  </td>
							</tr>


							<tr>
							  <td>2</td>
							  <td>Parneethi Chopra</td>
							  <td>USA</td>
							  <td>13/02/2012</td>
							  <td>Free</td>
							  <td><span class="label label-danger">Banned</span></td>
							  <td>

								  <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
								  <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
								  <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>

							  </td>
							</tr>

							<tr>
							  <td>3</td>
							  <td>Kumar Ragu</td>
							  <td>Japan</td>
							  <td>12/03/2012</td>
							  <td>Paid</td>
							  <td><span class="label label-success">Active</span></td>
							  <td>

								<div class="btn-group">
								  <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
								  <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
								  <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
								</div>

							  </td>
							</tr>

							<tr>
							  <td>4</td>
							  <td>Vishnu Vardan</td>
							  <td>Bangkok</td>
							  <td>03/11/2012</td>
							  <td>Paid</td>
							  <td><span class="label label-success">Active</span></td>
							  <td>

								<div class="btn-group">
								  <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
								  <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
								  <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
								</div>

							  </td>
							</tr>

							<tr>
							  <td>5</td>
							  <td>Anuksha Sharma</td>
							  <td>Singapore</td>
							  <td>13/32/2012</td>
							  <td>Free</td>
							  <td><span class="label label-danger">Banned</span></td>
							  <td>

								<div class="btn-group1">
								  <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
								  <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
								  <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
								</div>

							  </td>
							</tr>                                                            

						  </tbody>
						</table>
					</div>

                    <div class="widget-foot">

                     
                        <ul class="pagination pagination-sm pull-right">
                          <li><a href="#">Prev</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                     
                      <div class="clearfix"></div> 

                    </div>

                  </div>

                </div>


              </div>

            </div>


            <div class="row">

              <div class="col-md-6">
                <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
						  <thead>
							<tr>
							  <th>#</th>
							  <th>Name</th>
							  <th>Location</th>
							  <th>Type</th>
							  <th>Status</th>
							</tr>
						  </thead>
						  <tbody>

							<tr>
							  <td>1</td>
							  <td>Ravi Kumar</td>
							  <td>India</td>
							  <td>Paid</td>
							  <td><span class="label label-success">Active</span></td>

							</tr>


							<tr>
							  <td>2</td>
							  <td>Parneethi Chopra</td>
							  <td>USA</td>
							  <td>Free</td>
							  <td><span class="label label-danger">Banned</span></td>

							</tr>

							<tr>
							  <td>3</td>
							  <td>Kumar Ragu</td>
							  <td>Japan</td>
							  <td>Paid</td>
							  <td><span class="label label-success">Active</span></td>

							</tr>

							<tr>
							  <td>4</td>
							  <td>Vishnu Vardan</td>
							  <td>Bangkok</td>
							  <td>Paid</td>
							  <td><span class="label label-success">Active</span></td>

							</tr>

							<tr>
							  <td>5</td>
							  <td>Anuksha Sharma</td>
							  <td>Singapore</td>
							  <td>Free</td>
							  <td><span class="label label-danger">Banned</span></td>
		  
							</tr>                                                            

						  </tbody>
						</table>
					</div>

                    <div class="widget-foot">

                     
                        <ul class="pagination pagination-sm pull-right">
                          <li><a href="#">Prev</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                     
                      <div class="clearfix"></div> 

                    </div>

                  </div>

                </div>
              </div>

              <div class="col-md-6">

                <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
						  <thead>
							<tr>
							  <th>#</th>
							  <th>Name</th>
							  <th>Location</th>
							  <th>Date</th>
							  <th>Type</th>
							</tr>
						  </thead>
						  <tbody>

							<tr>
							  <td>1</td>
							  <td>Ravi Kumar</td>
							  <td>India</td>
							  <td>23/12/2012</td>
							  <td>Paid</td>
							</tr>


							<tr>
							  <td>2</td>
							  <td>Parneethi Chopra</td>
							  <td>USA</td>
							  <td>13/02/2012</td>
							  <td>Free</td>
							</tr>

							<tr>
							  <td>3</td>
							  <td>Kumar Ragu</td>
							  <td>Japan</td>
							  <td>12/03/2012</td>
							  <td>Paid</td>
							</tr>

							<tr>
							  <td>4</td>
							  <td>Vishnu Vardan</td>
							  <td>Bangkok</td>
							  <td>03/11/2012</td>
							  <td>Paid</td>
							</tr>

							<tr>
							  <td>5</td>
							  <td>Anuksha Sharma</td>
							  <td>Singapore</td>
							  <td>13/32/2012</td>
							  <td>Free</td>
							</tr>                                                            

						  </tbody>
						</table>
					</div>

                    <div class="widget-foot">

                      
                        <ul class="pagination pagination-sm pull-right">
                          <li><a href="#">Prev</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                      
                      <div class="clearfix"></div> 

                    </div>

                  </div>

                </div>

              </div>

            </div>

        </div>
		  </div>

		<!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->	    	
   <div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            <!-- Copyright info -->
            <p class="copy">Copyright &copy; 2012 | <a href="#">Your Site</a> </p>
      </div>
    </div>
  </div>
</footer> 	

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 

<!-- JS -->
<script src="js/jquery.js"></script> <!-- jQuery -->
<script src="js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="js/jquery-ui.min.js"></script> <!-- jQuery UI -->
<script src="js/moment.min.js"></script> <!-- Moment js for full calendar -->
<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
<script src="js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->
<script src="js/jquery.slimscroll.min.js"></script> <!-- jQuery Slim Scroll -->
<script src="js/jquery.dataTables.min.js"></script> <!-- Data tables -->

<!-- jQuery Flot -->
<script src="js/excanvas.min.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/jquery.flot.resize.js"></script>
<script src="js/jquery.flot.pie.js"></script>
<script src="js/jquery.flot.stack.js"></script>

<!-- jQuery Notification - Noty -->
<script src="js/jquery.noty.js"></script> <!-- jQuery Notify -->
<script src="js/themes/default.js"></script> <!-- jQuery Notify -->
<script src="js/layouts/bottom.js"></script> <!-- jQuery Notify -->
<script src="js/layouts/topRight.js"></script> <!-- jQuery Notify -->
<script src="js/layouts/top.js"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src="js/sparklines.js"></script> <!-- Sparklines -->
<script src="js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
<script src="js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<script src="js/jquery.onoff.min.js"></script> <!-- Bootstrap Toggle -->
<script src="js/filter.js"></script> <!-- Filter for support page -->
<script src="js/custom.js"></script> <!-- Custom codes -->
<script src="js/charts.js"></script> <!-- Charts & Graphs -->

</body>

<!-- Mirrored from ashobiz.dreamhosters.com/wrapbootstrap/mac531/macadmin/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Mar 2017 16:49:44 GMT -->
</html>