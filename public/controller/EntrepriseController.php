<?php
require_once 'model/EntrepriseModel.php';

class EntrepriseController {
 

  public function __construct(){
      $this->entreprisemodel = new EntrepriseModel;
      
  }
    function viewManagerEntreprise(){
      // appuyer sur le boutton qui lien changement de page 
      $view = isset($_GET['view']) ? $_GET['view'] : NULL;
        switch ($view) {
          case 'ajout':
            $this->includepage($view);
            break;
            case 'modification':
              $this->includepage($view);
              break;
          default:
         
          $this->ProcessLogin();
            break;
        }
// nouveau methode
      $action = isset($_GET['action']) ? $_GET['action'] : NULL;
        switch ($action) {
          // case 'listes':
          //   if (isset($_POST['listes'])) {
            
          //      $this->ProcessLogin();
          //      //header("location:view/entreprise/listes.php");  
          //    }
           
          //   break;
            case 'supprimer':
              if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $resultat = $this->usermodel->supprimer($id);
                if ($resultat) {
                  header("location:index.php");
                }
              }
              break;
              case 'modification':
                if (isset($_POST['modification'])) {
                  extract($_POST);
                  $this->usermodel->modifier($username, $email, $password, $id);
                 // nouveau chose ajouter
                 header("location:index.php");
                }           
                break;
          default:
         
            
            break;
        }

        // nouveau ancien 
        // if ($action == 'adduser') {
        //   if (isset($_POST['add'])) {
        //     extract($_POST);
        //     $this->usermodel->inserrerUser($username, $email, $password);
        //    // nouveau chose ajouter
        //    header("location:index.php");
        //   }
        //   // nouveau chose ajouter(pour la suppression)
        // } else {
        //   if ($action == 'supprimer') {
        //     if (isset($_GET['id'])) {
        //       $id = $_GET['id'];
        //       $resultat = $this->usermodel->supprimer($id);
        //       if ($resultat) {
        //         header("location:index.php");
        //       }
        //     }
        //   }
        // }

    }
    public function includepage($page)
    {
      if (condition) {
        # code...
      } else 
      //nouveau chose ajouter
      if ($page == "ajout") {
        //$entreprises = $this->entreprisemodel->lister(); 
        require_once 'view/entreprise/'.$page.'.php';
      } else {
        if ($page == "modification"  && isset($_GET['id'])) {
          $user = $this->usermodel->findUserId($_GET['id']);
          require_once 'view/entreprise/'.$page.'.php';

        }else {
          require_once 'view/entreprise/'.$page.'.php';
        }
      //}
      
    }

     }
}
