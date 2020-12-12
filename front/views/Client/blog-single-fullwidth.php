<?php if (isset($_SESSION['username']))
 { ?>
      
      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix blogPage singleBlog">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="thumbnail">
                <img src="1.1/img/blog/1.jpg" alt="blog-image">
                <div class="caption">
                  <div class="row">
                    <div class="col-md-2 col-md-push-10 col-sm-3 col-sm-push-9 col-xs-12">
                      
                   
                      <h5>Share</h5> 
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                       
                      </ul>
                    </div>
                    <div class="col-md-10 col-md-pull-2 col-sm-9 col-sm-pull-3 col-xs-12">
                      <h3>Leave your comment about our web site</h3>
                     

                      
                    </div>
                  </div>
                </div>
<?php
  $blogs=  blog::show($_SESSION['username']);
  foreach ($blogs as $blog) {   

    ?>
                <div class="commentsArea">
                
                  <div class="media">
                   
              <a class="media-left" href="#">
                      <img class="media-object" src="1.1/img/blog/avatar.jpg" alt="Image">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading"> <th><?php echo $blog['username'];?></th> </h4>
                      <h4><span><i  aria-hidden="true"></i> <th><?php echo $blog['fname'];?></th> </span></h4>
                      <p><th><?php echo $blog['comment'];?></th></p>
                    <form action="?controller=blog&action=supprimer" method="POST">
                                <button type="submit" class="btn btn-app btn-danger btn-sm" value=" Supprimer " name="supprimer">
                                    <i class="ace-icon fa fa-trash-o bigger-400"></i></button>
                                <input type="hidden" value="<?PHP echo $blog['username'] ?>" name="username" husernameden>
                            </form>
                    </div>
                  
                  </div>

                           
                 
                </div>
               
              </div>
            </div>
          </div>

 <?php
                                    }
                                    ?>
    
          <div class="row">
            <div class="col-xs-12">
              <form name="comment" action="?controller=blog&action=saveblog" method="post" role="form" class="commentsForm">
                <h3>Leave Comments</h3>
                <div class="row">
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="fname" id="" placeholder="Name" required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="email" name="username" class="form-control" id="" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                      <textarea class="form-control" name="comment" rows="3" placeholder="Comment" required></textarea>
                    </div>
                  </div>

                </div>
                <button type="submit" class="btn btn-primary">post comment</button>
              </form>
            </div>
          </div>
        </div>
      </section>
                   <?php } 
      else { ?>

<?php require_once("views/Client/signup-login.php"); } ?>