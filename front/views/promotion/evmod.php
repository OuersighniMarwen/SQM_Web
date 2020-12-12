<?php $id = $_POST['id']; ?>
 <?php require_once"modals/classe_promotion.php";?>
       <?php require_once"modals/classe_evenement.php";?>
      <?php require_once"bd.php"; ?>

 <?php $s=evenement::evchercher($id);
 foreach ($s as $d) { ?>
        <div class="clearfix"></div>

      </div>
        <form method="post" action="?controller=evenement&action=modi">
        <center><h2>Modifer pourentage d'un Evenement d'id <?php echo $id; ?> </h2></center><br><br>
       
        <input type="hidden" placeholder="ID" name="in1" value="<?php echo $id; ?>"/>
        <br><br> 
       
        Nom :
        <input type="text" placeholder="nom" name="in4" onblur="queDesLettres(this)" value = "<?php echo $d['evnom']?>"  rows="3"/>
        <br><br>
        Date Debut :
        <input type="date" name="in2" id="date" onblur="Commande()" value = "<?php echo $d['evdate_debut']?>"/>
        <br><br>
        Date Fin :
        <input type="date" name="in3" class="form-style-8" value = "<?php echo $d['evdate_fin']?>" />
        <br><br> 
        <br><br> 
        <center><button type="submit" class="btn btn-primary" ><i class="ace-icon fa fa-pencil-square-o bigger-230"></i> </button></center>

        </form>
            </div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
   <div class="clearfix"></div>
