<br>
<br> 
<br>
     <center>
    <h3>Show Discount</h3>
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

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="50%">
        <thead>
            <tr>

    
    <th align='center'> <h5> <div align='center'> Type </h5></div></th>
    <th align='center'> <h5>  <div align='center'>% </div></h5></th>
    <th align='center'> <h5><div align='center'> Name </h5> </div></th>
    <th align='center'> <h5><div align='center'>Start Date </div> </h5> </th>
    <th align='center'> <h5><div align='center'> End Date</div> </h5> </th>
   <!-- <th align='center'><h5> Show Products </h5></th>--  >
 
    

            </tr>
        </thead>
      
        <tbody>
            
        <?php foreach ($s as $donne) { ?>
    <tr>
 
    
    <th align='center'>
    <input type="hidden" name="protype" value= "<?php echo $donne['protype']; ?>" />
    <div align='center'><?php echo $donne['protype']; ?></div>
    </th>
    <th align='center'>
    <div align='center'><?php echo $donne['propourcentage']; ?></div>
    </th>
    <th align='center'>
    <div align='center'><?php echo $donne['pronom']; ?></div>
    </th>
    <th align='center'>
    <div align='center'><?php echo $donne['prodebut']; ?></div>
    </th>
    <th align='center'>
    <div align='center'><?php echo $donne['profin']; ?> </div>
    </th>
  

    
   <!-- <th align='center'>  <form method="post" action="?controller=promotion&action=afficheprod&proID=<?php //echo $donne['proID']; ?>&propourcentage=<?php// echo $donne['propourcentage']; ?>"> 
 
    <input type="hidden" name="id" value="<?php // echo $donne['proID']; ?>"> 
    <button type="submit" class="btn btn-primary" > Show Details </button> 
    </form> </th>-->
<!-- 
    <th align='center'> 
    <form method="post" action="?controller=promotion&action=proajouter">
    <input type="hidden" name="proID" value= "<?php echo $donne['proID']; ?>" /> 
    <input type="hidden" name="propourcentage" value= "<?php echo $donne['propourcentage']; ?>" />
    <input type="hidden" name="pronom" value= "<?php echo $donne['pronom']; ?>" />
    <input type="hidden" name="prodebut" value= "<?php echo $donne['prodebut']; ?>" />
    <input type="hidden" name="profin" value= "<?php echo $donne['profin']; ?>" />
    <input type="hidden" name="id" value="<?php echo $donne['proID']; ?>"> 
    </form> 

    </th>
-->
    
 


</tr>
     


 <?php } ?>

           
        </tbody>
    </table>
    


           