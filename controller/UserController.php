<?php
require_once 'model/UserModel.php';
class UserController {
 
private $usermodel;
  public function __construct(){
      $this->usermodel = new UserModel;
  }
    function viewManager(){
      $view = isset($_GET['view']) ? $_GET['view'] : NULL;
        switch ($view) {
          case 'ok':
            $this->includepage($view);
            break;
          
          default:
          $this->includepage();
            break;
        }
        $action = isset($_GET['action']) ? $_GET['action'] : NULL;
        if ($action == 'adduser') {
          if (isset($_POST['add'])) {
            extract($_POST);
           
            $this->usermodel->inserrerUser($username, $email, $password);
          }
        }

    }
    function includepage($page = 'InscriptionUser')
    {
      require_once 'view/users/'.$page.'.php';
    }
}

