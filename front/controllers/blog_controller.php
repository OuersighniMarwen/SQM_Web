<?php

 Class blog_controller{


   public function saveblog()//fct ajout
  {
    $blog =new blog();
    $blog->setusername($_POST['username']);
    $blog->setcomment($_POST['comment']);
    $blog->setfname($_POST['fname']);
    $blog->ajouterblog();
     
    require_once("views/client/blog-single-fullwidth.php");
  }
  public function addblog()
  {
   
    require_once("views/client/blog-single-fullwidth.php");


  }
   public function supprimer() 
        {
          blog::supprimer($_POST['username']);
           // $blogs= blog::show();
             echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               commentaire supprimer  avec 
                <strong class='green'>succès</strong>
                </div>";
            require_once('views/client/blog-single-index.php');
        }
  public function Index() 
        {
            $blogsss= blog::show();
        require_once('views/client/blog-single-fullwidth.php');
        }
  public function Editblog() 
        {
        
            require_once('views/client/blog-single-fullwidth.php');
        }
   public function Updateblog() 
      {
        
    $blog =new blog();
    $blog->setusername($_POST['username']);
    $blog->setpassword($_POST['comment']);
    $blog->setpassword($_POST['fname']);
    

            var_dump($blog);

    $blog->Updateblog();
            var_dump($blog);
            echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               blog modifié  avec 
                <strong class='green'>succès</strong>
                </div>";
            $this->Editblog();
        }
 
      
}

?>