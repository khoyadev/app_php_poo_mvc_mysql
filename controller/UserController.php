<?php
require_once 'model/UserModel.php';
class UserController {
 
public $usermodel;
  public function __construct(){
      $this->usermodel = new UserModel;
  }
    function viewManager(){
      $view = isset($_GET['view']) ? $_GET['view'] : NULL;
        switch ($view) {

          
          default:
          $this->includepage();
            break;
        }
      $action = isset($_GET['action']) ? $_GET['action'] : NULL;
        switch ($action) {
          case 'adduser':
            if (isset($_POST['add'])) {
              extract($_POST);
              $this->usermodel->inserrerUser($username, $email, $password);
            }
            break;
            case 'listes':
              if (isset($_POST['listes'])) {
              
                 $this->ProcessLogin();
                                 
               }
             
              break;
          default:

            break;
        }
        

    }
    function includepage($page = 'InscriptionUser')
    {
     
      if ($page == "listes") { 
       require_once 'view/organisation/'.$page.'.php';
       
      } else {
          require_once 'view/users/'.$page.'.php';
        }
      
    }
    function listes(){
      
    }
    public function ProcessLogin(){
      $email = (isset( $_POST['email'] ) && $_POST['email'] != '' ) ? strip_tags( $_POST['email'] ) : '';
      $password = (isset( $_POST['password'] ) && $_POST['password'] != '' ) ? strip_tags( $_POST['password'] ) : '';
    
      if( $this->usermodel->findUserEmailPwd($email, $password)){
         
          $_SESSION['email']     = $email;
          header("location:view/organisation/listes.php");

      }else {
        echo" pas connecter a la base";
      }
    }
}

