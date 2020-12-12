<br>
<br> 
<br>
     <center>
    <h3>Show Event</h3>
    </center>
    <br>
    <br>  
        <script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js""></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
    <th align='center'> <h5>  <div  align='center' > Name of Event </div></h5></th>
    <th align='center'> <div  align='center' >  <h5>Start Date </h5> </div></th>
    <th align='center'> <div  align='center' > <h5> End Date</h5> </div></th>
    

            </tr>


        </thead>
      
        <tbody>
            
        <?php foreach ($s as $donne) { ?>
    <tr>
 
    
    <th align='center'>
    <input type="hidden" name="evnom" value= "<?php echo $donne['evnom']; ?>" />
    <div  align='center' ><?php echo $donne['evnom']; ?></div>
    </th>
   
    <th align='center'>
      <div  align='center' > <?php echo $donne['evdate_debut']; ?> </div>
    </th>
    <th align='center'>
    <div  align='center' > <?php echo $donne['evdate_fin']; ?> </div>
    </th>
    
    </th>
</tr>
   


 <?php } ?>

           
        </tbody>
    </table>
    


         <div  align='center' >Here is our shop </div>
         <center>
<iframe src="https://www.google.tn/maps/place/Patisserie+Lobna/@36.8466435,10.1661957,19z/data=!4m5!3m4!1s0x0:0x2d3a4ddacbde7244!8m2!3d36.8467043!4d10.1659323?hl=en" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</center>
 











