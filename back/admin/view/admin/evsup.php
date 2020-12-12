        <div class="clearfix"></div>

      </div>
      <div class="page-header">
    <h1>Liste Des Evenements</h1>
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

    <th align='center'>  <h5> ID evenement  </h5> </th> 
    <th align='center'> <h5> nom de l'evenement </h5></th>
  
    <th align='center'> <h5>Date Debut </h5> </th>
    <th align='center'> <h5> Date Fin </h5> </th>
    <th align='center'> Modifier </th>
    <th align='center'> supprimer </th>

            </tr>


        </thead>
      
        <tbody>
            
        <?php foreach ($s as $donne) { ?>
    <tr>
 
    <th align='center'> 
     
    <?php echo $donne['evid']; ?>
    </th>
    <th align='center'>
    <input type="hidden" name="evnom" value= "<?php echo $donne['evnom']; ?>" />
    <?php echo $donne['evnom']; ?>
    </th>
   
    <th align='center'>
    <?php echo $donne['evdate_debut']; ?>
    </th>
    <th align='center'>
    <?php echo $donne['evdate_fin']; ?> 
    </th>
  

    

  

    </th>

      <th align='center'> <form method="post" action="?controller=evenement&action=evmodifier"> <button type="submit" value="<?php echo $donne['evid']; ?>" name="id"  class="btn btn-app btn-primary btn-sm" > <i class="ace-icon fa fa-pencil-square-o bigger-230"></i> </i></button> </form> </th>

    <th align='center'> <form method="post" action="?controller=evenement&action=evsup" > <input type="hidden" name="evid" value="<?php echo $donne['evid']; ?>"> <button type="submit" class="btn btn-app btn-danger btn-sm" >
                                    <i class="ace-icon fa fa-trash-o bigger-200"></i></button> </form> </th>
 


</tr>
     


 <?php } ?>

           
        </tbody>
    </table>
    


           
 


















</div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   <div class="clearfix"></div>
   
