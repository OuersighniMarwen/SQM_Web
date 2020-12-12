<!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix productsContent">
        <div class="container">
          <div class="row">
             <?php
                                    $N=1;



                                  foreach($produits as $produit){
                                    ?>
            <div class="col-sm-4 col-xs-12">
              <div class="productBox">
                <div class="productImage clearfix">
                 <img width="10" height="300" src="images_produits/<?php echo $produit['image']; ?>" >
                  <div class="productMasking">
                    <ul class="list-inline btn-group" role="group">
                    
                      <li><a class="btn btn-default" data-toggle="modal" href="?controller=produits&action=chercher&reference=<?php echo $produit['reference'] ?>" ><i class="fa fa-eye"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="productCaption clearfix">
                  <a href="?controller=produits&action=chercher&reference=<?php echo $produit['reference'] ?>">
                    <h5>  <?php echo $produit['nom'] ?></h5>
                  </a>
                  <h3>  <?php echo $produit['prix'] ?></h3>
                </div>
              </div>
            </div>

            <?php } ?>

          </div>
        </div>
      </section>

      <!-- LIGHT SECTION -->
    

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 8790931;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<!-- End of LiveChat code -->
