<?php
if (isset($_SESSION['username']))
{
    echo 'username:'.$_SESSION['username'];
}
else {
echo 'no';
}
?>

<div class="page-header">
    <h1>Liste Des Commentaires</h1>
</div>
    <div class="nav-search" id="nav-search">
        <form class="form-search" action="?controller=blog&action=recherche" method="POST">
            <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off"  value="" name="recherche">

                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
        </form>
    </div>
    <br>
    <br>
    <br>

<div class="container">
    <div class="row">
        <div class="wusernameget-box wusernameget-color-blue">
            <table class="table table-striped table-bordered table-hover ">

                <tr>
                    <th>N°</th>
                    <th>Username</th>
                    <th>First name</th>
                    <th>Comment</th>      
                    <th>Supprimer</th>
                    <th>Modifier</th>
                   
                
                </tr>
                <?php
                                    $N=1;

            
            
                                  foreach($blogs as $blog){
                                    ?>
                    <tr>
                        <td>
                            <?php echo $N++ ?>
                        </td>
                        <td>
                            <?php echo $blog['username'] ?>
                        </td>
                       <td>
                            <?php echo $blog['fname'] ?>
                        </td>
                        <td>
                            <?php echo $blog['comment'] ?>
                        </td>
                       
                      
                        <td>
                            <form action="?controller=blog&action=supprimer" method="POST">
                                <button type="submit" class="btn btn-app btn-danger btn-sm" value=" Supprimer " name="supprimer">
                                    <i class="ace-icon fa fa-trash-o bigger-200"></i></button>
                                <input type="hidden" value="<?PHP echo $blog['username'] ?>" name="username" husernameden>
                            </form>
                        </td>
                           <td>
                            <form action="?controller=blog&action=Edit" method="POST">
                            <?php  if($_SESSION['username']!=$blog['username'] ) echo" 
                             <button type='submit' disabled class='btn btn-app btn-primary btn-sm' value='Modifier' name='modifier'>
                                    <i class='ace-icon fa fa-pencil-square-o bigger-230'></i>
                                   <input type='hidden' value='".$blog['username']."' name='username' husernameden>
                                </button>

                            ";
                            else 
                            echo "
                                 <button type='submit' class='btn btn-app btn-primary btn-sm' value='Modifier' name='modifier'>
                                    <i class='ace-icon fa fa-pencil-square-o bigger-230'></i>
                                   <input type='hidden' value='".$blog['username']."' name='username' husernameden>
                                </button>
                            "; ?>
                               
                               
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

