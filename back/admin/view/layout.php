<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ashobiz.dreamhosters.com/wrapbootstrap/mac531/macadmin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Mar 2017 16:49:20 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Boutique Enjoy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">


  <!-- Stylesheets -->
  <link href="template/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="template/css/font-awesome.min.css"> 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="template/css/jquery-ui.css"> 
  <!-- Calendar -->
  <link rel="stylesheet" href="template/css/fullcalendar.css">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="template/css/prettyPhoto.css">  
  <!-- Star rating -->
  <link rel="stylesheet" href="template/css/rateit.css">
  <!-- Date picker -->
  <link rel="stylesheet" href="template/css/bootstrap-datetimepicker.min.css">
  <!-- CLEditor -->
  <link rel="stylesheet" href="template/css/jquery.cleditor.css"> 
  <!-- Data tables -->
  <link rel="stylesheet" href="template/css/jquery.dataTables.css"> 
  <!-- Bootstrap toggle -->
  <link rel="stylesheet" href="template/css/jquery.onoff.css">
  <!-- Main stylesheet -->
  <link href="template/css/style.css" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="template/css/widgets.css" rel="stylesheet">   
  
  <script src="template/js/respond.min.js"></script>
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="template/img/favicon/favicon.png">
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
      
             

        
        <!-- Links -->
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown pull-right">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-user"></i> Admin <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="?controller=login&action=logout"><i class="fa fa-sign-out"></i> Logout</a></li>
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
            <h1><a href="#">Enjoy<span class="bold">Admin</span></a></h1>
            <p class="meta">bienvenue sur votre site-enjoy</p>
          </div>
          <!-- Logo ends -->
        </div>

        <!-- Button section -->
        <div class="col-md-4">

         

        </div>

        <!-- Data section -->

        
      </div>
    </div>
  </header>

<!-- Header ends -->

<!-- Main content starts -->

<div class="content">

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

     
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          <li class="open"><a href="?action=index&controller=index"><i class="fa fa-home"></i> Home</a>
           
          </li>
          <li class="has_sub">
      <a href="#"><i class="fa fa-list-alt"></i> Clients  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="?action=afficher&controller=client">Liste des Clients</a></li>
              <li><a href="?controller=blog&action=afficher"> Commentaire </a></li>
              <li><a href="?controller=blog&action=Ajouter"> Ajouter un commentaire</a></li>
            
            </ul>
          </li>  
            <li class="has_sub">
      <a href="#"><i class="fa fa-gift "></i> Promotion <span class="pull-right "><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="?action=proajout&controller=promotion">Ajouter une Promotion</a></li>
              <li><a href="?action=proaff&controller=promotion">Nos Promotions</a></li>
            
            </ul>
            </li>
  <li class="has_sub">
            <a href="#"><i class="fa fa-gift "></i> Evenement <span class="pull-right "><i class="fa fa-chevron-right"></i></span></a>
            <ul>
            
              <li><a href="?action=evajout&controller=evenement">Ajouter un evenement</a></li>
              <li><a href="?action=evaff&controller=evenement">Nos evenements</a></li>
            </ul>
          </li>    
      <li class="has_sub">
      <a href="#"><i class="fa fa-list-alt"></i> Produit  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="?action=afficher&controller=produit">Liste des Produit</a></li>
              <li><a href="?controller=produit&action=Ajouter"> Ajouter un Produit</a></li>
            
            </ul>
          </li>  
         <li class="has_sub">
           <a href="#"><i class="fa fa-list-alt"></i> Commande  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="?controller=commande&action=afficher">Liste des commande</a></li>
            </ul>
          </li>     
          <li class="has_sub">
           <a href="#"><i class="fa fa-list-alt"></i> Livraison  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="?controller=livraison&action=afficher">Liste des Livraison</a></li>
            </ul>
          </li>   
           <li class="has_sub">
           <a href="#"><i class="fa fa-list-alt"></i> Reclamation  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="?controller=reclamation&action=afficher">Liste des Reclamation</a></li>
            </ul>
          </li>   
          
        </ul>
    </div>

    <!-- Sidebar ends -->

        <!-- Main bar -->
    <div class="mainbar">
      
      <!-- Page heading -->
      <div class="page-head">
       
        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
         
        </div>

        

<?php
  require_once('routes.php'); ?>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            <!-- Copyright info -->
         
      </div>
    </div>
  </div>
</footer>   

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 

<!-- JS -->
<script src="template/js/jquery.js"></script> <!-- jQuery -->
<script src="template/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="template/js/jquery-ui.min.js"></script> <!-- jQuery UI -->
<script src="template/js/moment.min.js"></script> <!-- Moment js for full calendar -->
<script src="template/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="template/js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
<script src="template/js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->
<script src="template/js/jquery.slimscroll.min.js"></script> <!-- jQuery Slim Scroll -->
<script src="template/js/jquery.dataTables.min.js"></script> <!-- Data tables -->

<!-- jQuery Flot -->
<script src="template/js/excanvas.min.js"></script>
<script src="template/js/jquery.flot.js"></script>
<script src="template/js/jquery.flot.resize.js"></script>
<script src="template/js/jquery.flot.pie.js"></script>
<script src="template/js/jquery.flot.stack.js"></script>

<!-- jQuery Notification - Noty -->
<!--<script src="template/js/jquery.noty.js"></script>  jQuery Notify -->
<!--<script src="template/js/themes/default.js"></script> jQuery Notify -->
<script src="template/js/layouts/bottom.js"></script> <!-- jQuery Notify -->
<script src="template/js/layouts/topRight.js"></script> <!-- jQuery Notify -->
<script src="template/js/layouts/top.js"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src="template/js/sparklines.js"></script> <!-- Sparklines -->
<script src="template/js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
<script src="template/js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<script src="template/js/jquery.onoff.min.js"></script> <!-- Bootstrap Toggle -->
<script src="template/js/filter.js"></script> <!-- Filter for support page -->
<script src="template/js/custom.js"></script> <!-- Custom codes -->
<script src="template/js/charts.js"></script> <!-- Charts & Graphs -->

<!-- Script for this page -->
<script type="text/javascript">
$(function () {

    /* Bar Chart starts */

    var d1 = [];
    for (var i = 0; i <= 20; i += 1)
        d1.push([i, parseInt(Math.random() * 30)]);

    var d2 = [];
    for (var i = 0; i <= 20; i += 1)
        d2.push([i, parseInt(Math.random() * 30)]);


    var stack = 0, bars = true, lines = false, steps = false;
    
    function plotWithOptions() {
        $.plot($("#bar-chart"), [ d1, d2 ], {
            series: {
                stack: stack,
                lines: { show: lines, fill: true, steps: steps },
                bars: { show: bars, barWidth: 0.8 }
            },
            grid: {
                borderWidth: 0, hoverable: true, color: "#777"
            },
            colors: ["#ff6c24", "#ff2424"],
            bars: {
                  show: true,
                  lineWidth: 0,
                  fill: true,
                  fillColor: { colors: [ { opacity: 0.9 }, { opacity: 0.8 } ] }
            }
        });
    }

    plotWithOptions();
    
    $(".stackControls input").click(function (e) {
        e.preventDefault();
        stack = $(this).val() == "With stacking" ? true : null;
        plotWithOptions();
    });
    $(".graphControls input").click(function (e) {
        e.preventDefault();
        bars = $(this).val().indexOf("Bars") != -1;
        lines = $(this).val().indexOf("Lines") != -1;
        steps = $(this).val().indexOf("steps") != -1;
        plotWithOptions();
    });

    /* Bar chart ends */

});


/* Curve chart starts */

$(function () {
    var sin = [], cos = [];
    for (var i = 0; i < 14; i += 0.5) {
        sin.push([i, Math.sin(i)]);
        cos.push([i, Math.cos(i)]);
    }

    var plot = $.plot($("#curve-chart"),
           [ { data: sin, label: "sin(x)"}, { data: cos, label: "cos(x)" } ], {
               series: {
                   lines: { show: true, fill: true},
                   points: { show: true }
               },
               grid: { hoverable: true, clickable: true, borderWidth:0 },
               yaxis: { min: -1.2, max: 1.2 },
               colors: ["#1eafed", "#1eafed"]
             });

    function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y + 5,
            left: x + 5,
            border: '1px solid #000',
            padding: '2px 8px',
            color: '#ccc',
            'background-color': '#000',
            opacity: 0.9
        }).appendTo("body").fadeIn(200);
    }

    var previousPoint = null;
    $("#curve-chart").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));

        if ($("#enableTooltip:checked").length > 0) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    
                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);
                    
                    showTooltip(item.pageX, item.pageY, 
                                item.series.label + " of " + x + " = " + y);
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;            
            }
        }
    }); 

    $("#curve-chart").bind("plotclick", function (event, pos, item) {
        if (item) {
            $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
            plot.highlight(item.series, item.datapoint);
        }
    });

});

/* Curve chart ends */
</script>

</body>

<!-- Mirrored from ashobiz.dreamhosters.com/wrapbootstrap/mac531/macadmin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Mar 2017 16:49:20 GMT -->
</html>