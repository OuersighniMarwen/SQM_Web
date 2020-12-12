

<div class="page-header">
    <h1>Liste Des Clients</h1>
</div>
    <div class="nav-search" id="nav-search">
        <form class="form-search" action="?controller=client&action=recherche" method="POST">
            <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off"  value="" name="recherche">

                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
        </form>
    </div>
    <br>
    <br>
    <br>

<?php
  
  
       $notification2=config::getInstance()->conn->query('select count(*) from document ');
       $notification=config::getInstance()->conn->query('select count(*) from document where admin=0 ');
       $notification1=config::getInstance()->conn->query('select count(*) from document where admin =1 ');

   
   ?>

        <h2>Le nombre totale des clients :  <?php  while($SingleLine4 = $notification2->fetch())  {echo "".$SingleLine4["count(*)"]."";}?>       </h2>  <br>
        <h4>Le nombre totale des clients  active:  <?php  while($SingleLine1 = $notification->fetch())  {echo "".$SingleLine1["count(*)"]."";}?>       </h4>  <br>
        <h4>Le nombre totale des clients  desactive:  <?php  while($SingleLine2 = $notification1->fetch())  {echo "".$SingleLine2["count(*)"]."";}?>       </h4>  <br>
       

<div class="container">
    <div class="row">
        <div class="wusernameget-box wusernameget-color-blue">
            <table class="table table-striped table-bordered table-hover ">

                <tr>
                    <th>N°</th>
                    <th>Username</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Phone number</th>
                    <th>Adress</th>
                    <th>Supprimer</th>
                    <th>Active</th>
                    <th>Desactive</th>
                   
                   
                
                </tr>
                <?php
                                    $N=1;

            
            
                                  foreach($clients as $client){
                                    ?>
                    <tr>
                    
                          <?php if($client['admin']==0 ) 
                            echo "<td  bgcolor='green'>
                            ". $N++. "</td>";
                        else
                            echo "<td bgcolor='red'>
                            ". $N++. "
                        </td>";



                            ?>
                      
                        
                        <td>
                            <?php echo $client['username'] ?>
                        </td>
                       <td>
                            <?php echo $client['fname'] ?>
                        </td>
                        <td>
                            <?php echo $client['lname'] ?>
                        </td>
                        <td>
                            <?php echo $client['phone']?>
                        </td>
                        
                        <td>
                            <?php echo $client['adresse'] ?>
                        </td>
                      
                        <td>
                            <form action="?controller=client&action=supprimer" method="POST">
                                <button type="submit" class="btn btn-app btn-danger btn-sm" value=" Supprimer " name="supprimer">
                                    <i class="ace-icon fa fa-trash-o bigger-200"></i></button>
                                <input type="hidden" value="<?PHP echo $client['username'] ?>" name="username" husernameden>
                            </form>
                        </td>
                          <td>
                            <form action="?controller=client&action=active" method="POST">
                                <button type="submit" class="btn btn-app btn-primary btn-sm" value=" active " name="active">
                                    <i class="fa fa-user bigger-200"></i></button>
                                <input type="hidden" value="<?PHP echo $client['username'] ?>" name="username" husernameden>
                            </form>
                        </td>
                          <td>
                            <form action="?controller=client&action=desactive" method="POST">
                                <button type="submit" class="btn btn-app btn-danger btn-sm" value=" desactive " name="desactive">
                                    <i class="fa fa-lock bigger-200"></i></button>
                                <input type="hidden" value="<?PHP echo $client['username'] ?>" name="username" husernameden>
                            </form>
                        </td>
                    </tr>
                    <?php
                                    }
                                    ?>

            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>

