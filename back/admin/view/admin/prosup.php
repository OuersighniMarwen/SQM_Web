        <div class="clearfix"></div>

      </div>
      <div class="page-header">
    <h1>Liste Des Promotions</h1>
</div>
 
<div class="row">
        <div class="wusernameget-box wusernameget-color-blue">
        <script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js""></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">


<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>

    <th align='center'>  <h5> ID Promotion  </h5> </th> 
    <th align='center'> <h5> Type </h5></th>
    <th align='center'> <h5>  Pourcentage </h5></th>
    <th align='center'> <h5> Nom </h5></th>
    <th align='center'> <h5>Date Debut </h5> </th>
    <th align='center'> <h5> Date Fin </h5> </th>
    <th align='center'> Afficher les produits </th>
    <th align='center'> Ajouter un produit </th>
    <th align='center'> Modifier </th>
    <th align='center'> supprimer </th>

            </tr>


        </thead>
      
        <tbody>
            
        <?php foreach ($s as $donne) { ?>
    <tr>
 
    <th align='center'> 
     
    <?php echo $donne['proID']; ?>
    </th>
    <th align='center'>
    <input type="hidden" name="protype" value= "<?php echo $donne['protype']; ?>" />
    <?php echo $donne['protype']; ?>
    </th>
    <th align='center'>
    
    <?php echo $donne['propourcentage']; ?>
    </th>
    <th align='center'>
    <?php echo $donne['pronom']; ?>
    </th>
    <th align='center'>
    <?php echo $donne['prodebut']; ?>
    </th>
    <th align='center'>
    <?php echo $donne['profin']; ?> 
    </th>
  

    <th align='center'> 
    <form method="post" action="?controller=promotion&action=afficheprod"> 
 
    <input type="hidden" name="id" value="<?php echo $donne['proID']; ?>"> 
    <button type="submit" class="btn btn-primary" > Afficher </button> 
    </form> </th>

    <th align='center'> 
    <form method="post" action="?controller=promotion&action=proajouter">
    <input type="hidden" name="proID" value= "<?php echo $donne['proID']; ?>" /> 
    <input type="hidden" name="propourcentage" value= "<?php echo $donne['propourcentage']; ?>" />
    <input type="hidden" name="pronom" value= "<?php echo $donne['pronom']; ?>" />
    <input type="hidden" name="prodebut" value= "<?php echo $donne['prodebut']; ?>" />
    <input type="hidden" name="profin" value= "<?php echo $donne['profin']; ?>" />
    <input type="hidden" name="id" value="<?php echo $donne['proID']; ?>"> 
    <button type="submit" class="btn btn-primary" > Ajouter </button> 
    </form> 

    </th>

      <th align='center'> <form method="post" action="?controller=promotion&action=promod"> <button type="submit" value="<?php echo $donne['proID']; ?>" name="id"  class="btn btn-app btn-primary btn-sm" > <i class="ace-icon fa fa-pencil-square-o bigger-230"></i> </i></button> </form> </th>

    <th align='center'> <form method="post" action="?controller=promotion&action=prosup" > <input type="hidden" name="proID" value="<?php echo $donne['proID']; ?>"> <button type="submit" class="btn btn-app btn-danger btn-sm" >
                                    <i class="ace-icon fa fa-trash-o bigger-200"></i></button> </form> </th>
 


</tr>
     


 <?php } ?>

           
        </tbody>
    </table>
    


           
 
 
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);
   

   function drawChart() {
   
     var data = new google.visualization.DataTable();
     data.addColumn('string', 'adresse');
     data.addColumn('number', 'Numbers');
     data.addRows([
    <?php foreach ($Gammes as $G){ ?>      
       ['<?php echo $G['adresse'];?>',  <?php echo  client::CountGamme($G['adresse']);  ?>],
       <?php } ?>
     ]);
   
     var options = {title:'',
                    width:450,
                    height:300,
                    pieHole: 0.4
                    };
   
     var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
     chart.draw(data, options);
   }
</script>

<?php
  
  $notification2=config::getInstance()->conn->query('select count(*) from produit where IDpromotion is not null  ');
 
    
       $notification=config::getInstance()->conn->query('select count(*) from produit where IDpromotion is null');
   
   ?>





<html>
  <head>
     <script id="pie" type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['sans promo',      <?php  while($SingleLine4 = $notification->fetch())  {echo "".$SingleLine4["count(*)"]."";}?>],
          ['avec promo',   <?php  while($SingleLine4 = $notification2->fetch()) {echo "".$SingleLine4["count(*)"]."";}?>]
        ]);

        var options = {
          title: 'Statistique des produits '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  
  </head>
  <body>
<div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>








<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51348.44851999836!2d10.677229730880406!3d36.450836635457826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13029895efbdd3d3%3A0x2e5d60d1569ce4fe!2zTmFiZXVs4oCOLCBUdW5pc2ll!5e0!3m2!1sfr!2sfr!4v1493559363659" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


</html>







</div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   <div class="clearfix"></div>
   
