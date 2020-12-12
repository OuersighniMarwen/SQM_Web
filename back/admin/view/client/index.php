

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Garby's Matos Statistics</h4>
                            </div>
                            <div class="content">
                               
 


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'sales'],
          ['2014',  <?php  echo 1;?>],
          ['2015', <?php  echo 2;?>],
          ['2016', <?php  echo 3;?>],
          ['2017', 4]
        ]);

        var options = {
          chart: {
            title: 'Garbys Matos Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
 &nbsp;
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  <br>
     <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>


					</div>
					</div>
                    </div>

					</div>
					</div>