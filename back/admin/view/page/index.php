<?php
if (isset($_SESSION['username']))
{
    echo 'username:'.$_SESSION['username'];
}
else {
echo 'no';
}
?>
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
  
  
       $notification2=config::getInstance()->conn->query('select count(*) from commande   where etat=0');
 
    
       $notification=config::getInstance()->conn->query('select   count(*) from commande where etat=1');
   
   ?>
<html>
  <head>
     <script id="pie" type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Commande confirmé',      <?php  while($SingleLine4 = $notification->fetch())  {echo "".$SingleLine4["count(*)"]."";}?>],
          ['Commande non confirmé',   <?php  while($SingleLine4 = $notification2->fetch()) {echo "".$SingleLine4["count(*)"]."";}?>]
        ]);

        var options = {
          title: 'Graphique '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  
  </head>
  <body>
<div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>