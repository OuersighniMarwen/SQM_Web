

<div class="page-header">
    <h1>Liste Des commentaire</h1>
</div>
  
                <?php                      
        foreach($blogs as $blog){
           ?>
          <div class="row">
            <div class="col-xs-12">
              <form name="comment" action="?controller=blog&action=Update" method="POST" role="form" class="commentsForm">
                <h3>Leave Comments</h3>
                <div class="row">
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="in2" id="" placeholder=" <?php echo $blog['fname'] ?>" >
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="email" name="in1" class="form-control" id="" value="<?php echo $blog['username'] ?>" disable>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                      <textarea class="form-control" name="in3" rows="3" placeholder="<?php echo $blog['comment'] ?>"></textarea>
                    </div>
                  </div>
                   <?php
                                    }
                                    ?>

                </div>
                <button type="submit" class="btn btn-primary">Update comment</button>
              </form>
            </div>
          </div>


