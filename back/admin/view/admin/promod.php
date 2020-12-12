
<?php $id = $_POST['id']; ?>
 <?php require_once"modals/classe_promotion.php";?>
       <?php require_once"modals/classe_evenement.php";?>
      <?php require_once"bd.php"; ?>

 <?php $s=promotion::chercher($id);
 foreach ($s as $d) { ?>
        <div class="clearfix"></div>

      </div>
        <form method="post" action="?controller=promotion&action=modifier">
        <center><h2>Modifer pourentage d'une Promotion d'id <?php echo $id; ?> </h2></center><br><br>
       
        <input type="hidden" placeholder="ID" name="in1" value="<?php echo $id; ?>"/>
        <br><br> 
        Autre pourcentage :
        <input type="text" placeholder="pourcentage%" name="in2"  onblur="queDesChiffre(this)" value = "<?php echo $d['propourcentage']  ?>"/>

        <br><br>
        Nom :
        <input type="text" placeholder="nom" name="in3" onblur="queDesLettres(this)" value = "<?php echo $d['pronom']?>"  rows="3"/>
        <br><br>
        Date Debut :
        <input type="date" name="in4" id="date" onblur="Commande()" value = "<?php echo $d['prodebut']?>"/>
        <br><br>
        Date Fin :
        <input type="date" name="in5" class="form-style-8" value = "<?php echo $d['profin']?>" />
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
