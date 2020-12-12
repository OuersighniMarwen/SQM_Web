<?php
  require_once("modals/blog.php");
 Class blog_controller{


  public function afficher() 
        {
            $blogs= blog::show();
            require_once('view/client/blog-single-fullwidth.php');
        }
        public function supprimer() 
        {
          blog::supprimer($_POST['username']);
            $blogs= blog::show();
             echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               commentaire supprimer  avec 
                <strong class='green'>succès</strong>
                </div>";
            require_once('view/client/blog-single-fullwidth.php');
        }
        public function chercher() {
     
            $blogs= blog::chercherblog($_POST['username']);
            require_once('view/client/blog-single-fullwidth.php');
    }

             public function recherche() {
     if ($_POST)
     {
$n=$_POST['recherche'];
$blogs= blog::research($n);
} 
require_once('view/client/blog-single-fullwidth.php');
} 
    public  function Ajouter() 
        {
         blog::insert();
           require_once('view/client/ajouterblog.php');
            /* echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               commentaire ajouter  avec 
                <strong class='green'>succès</strong>
                </div>";*/
        }

         public function Edit() 
        {
           $blogs= blog::chercherblog($_POST['username']);
            require_once('view/client/EditBlog.php');
        }
        public function Update() 
        {
           blog::Update();
            echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               commentaire modifié  avec 
                <strong class='green'>succès</strong>
                </div>";
           
        }
}
?>