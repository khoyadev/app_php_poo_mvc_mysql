<?php
require_once 'model/EntrepriseModel.php';
require_once 'model/UserModel.php';
require_once 'model/QuartierModel.php';
require_once 'model/DispositifModel.php';
require_once 'model/RegimeModel.php';
require_once 'model/RepondantModel.php';
require_once 'model/DomaineModel.php';

class UserController {
 
public $usermodel;
  public function __construct(){
    $this->entreprisemodel = new EntrepriseModel;
    $this->quartiermodel = new QuartierModel;
    $this->dispositifmodel = new DispositifModel;
    $this->regimemodel = new RegimeModel;
    $this->repondantmodel = new RepondantModel;
    $this->domainemodel = new DomaineModel;
      $this->usermodel = new UserModel;
  }
    function viewManager(){
      $view = isset($_GET['view']) ? $_GET['view'] : NULL;
        switch ($view) {
          case 'InscriptionUser':

              $this->ProcessLogin();
              
            break;
          case 'details':
            $this->includepage($view);
            break;
          case 'ajout':
            $this->includepage($view);
            break;
          case 'modification':
            $this->includepage($view);
            break;
          default:
          $this->includepage($view);
            break;
        }
      $action = isset($_GET['action']) ? $_GET['action'] : NULL;
      
        switch ($action) {
          case 'modification':
           
            if (isset($_POST['modifier'])) {
              extract($_POST);
              $cotisations_sociales = empty($_POST['cotisations_sociales']) ? 0 : 1;
              $organigramme = empty($_POST['organigramme']) ? 0 : 1;
              $contrat = empty($_POST['contrat']) ? 0 : 1;
              echo 2;
              $this->entreprisemodel->modifier($nom_entreprise, $coordonnees, $ninea, $rccm, $date_creation, $page_web, $nombre_employe, $organigramme, $cotisations_sociales, $contrat, $id_repondant, $id_domaine, $id_dispositif, $id_regime, $id_quartier, $id_entreprise);
             
              header("location:http://localhost/PHP/app_poo_mvc_mysql/index.php?view=listes");
              
            }           
          break;
          case 'adduser':
            if (isset($_POST['add'])) {
              extract($_POST);
              $this->usermodel->inserrerUser($username, $email, $password);
            }
          break;
          case 'addentreprise':
              if (isset($_POST['add'])) {
                extract($_POST);
                $cotisations_sociales = empty($_POST['cotisations_sociales']) ? 0 : 1;
                $organigramme = empty($_POST['organigramme']) ? 0 : 1;
                $contrat = empty($_POST['contrat']) ? 0 : 1;
                //var_dump($_POST['add']);
                $this->entreprisemodel->inserrerEntreprise($nom_entreprise, $coordonnees, $ninea, $rccm, $date_creation, $page_web, $nombre_employe, $organigramme, $cotisations_sociales, $contrat, $id_repondant, $id_domaine, $id_dispositif, $id_regime, $id_quartier);
                //header("location:http://localhost/PHP/app_poo_mvc_mysql/index.php?view=listes");
                require_once"view/entreprise/listes.php";
                
              }           
          break;
          case 'supprimer':
            
            if (isset($_GET['id'])) {
              $id = $_GET['id'];
              $resultat = $this->entreprisemodel->supprimer($id);
                   
              if ($resultat) {
                header("location:http://localhost/PHP/app_poo_mvc_mysql/index.php?view=listes");
              }
            
            }
            break;

          default:

            break;
        }
        

    }
  
    function includepage($page ='listes')
    {

      
      if ($page == "details" && isset($_GET['id'])) {
       
       $entreprises = $this->entreprisemodel->findEntrepriseId($_GET['id']);
       $repondantsID = $this->repondantmodel->findIdRepondant($entreprises['id_repondant']); 
        $domainesID = $this->domainemodel->findIdDomaine($entreprises['id_domaine']);
        $dispositifsID = $this->dispositifmodel->findIdDispositif($entreprises['id_dispositif']);
        $regimeID = $this->regimemodel->findIdRegime($entreprises['id_regime']);
        $quartiersID = $this->quartiermodel->findIdQuartier($entreprises['id_quartier']);

        require_once 'view/entreprise/'.$page.'.php';
        } elseif ($page == "listes") {
          $entreprises = $this->entreprisemodel->lister(); 
          require_once 'view/entreprise/'.$page.'.php';
          } elseif ($page == "ajout") {
            $repondants = $this->repondantmodel->listerRepondant();         
            $domaines = $this->domainemodel->listerDomaine();
            $dispositifs = $this->dispositifmodel->listerDispositif();
            $regimes = $this->regimemodel->listerRegime();
            $quartiers = $this->quartiermodel->listerQuartier();
              require_once 'view/entreprise/'.$page.'.php';


          }elseif ($page == "modification"  && isset($_GET['id'])) {
            $repondants = $this->repondantmodel->listerRepondant();         
            $domaines = $this->domainemodel->listerDomaine();
            $dispositifs = $this->dispositifmodel->listerDispositif();
            $regimes = $this->regimemodel->listerRegime();
            $quartiers = $this->quartiermodel->listerQuartier();
           $entreprises = $this->entreprisemodel->findEntrepriseId($_GET['id']);
          
            require_once 'view/entreprise/'.$page.'.php';
            
          }else{
            require_once 'view/users/InscriptionUser.php';
          }
        
        
    }
    public function logout(){
      unset($_SESSION['usersId']);
      unset($_SESSION['usersName']);
      unset($_SESSION['usersEmail']);
      session_destroy();
      redirect("../index.php");
  }
    public function ProcessLogin(){
      $username = (isset( $_POST['username'] ) && $_POST['username'] != '' ) ? strip_tags( $_POST['username'] ) : '';
      $password = (isset( $_POST['password'] ) && $_POST['password'] != '' ) ? strip_tags( $_POST['password'] ) : '';

      if( $this->usermodel->findUsernamePwd($username, $password)){
         //$this->includepage($view);
           $_SESSION['username'] = $username;
          $entreprises = $this->entreprisemodel->lister(); 
         require_once 'view/entreprise/listes.php';

      }elseif (!isset($_GET['action'])) {
        echo" pas connecter a la base";
      }
    }
    public function RetournerListe(){
      $entreprises = $this->entreprisemodel->lister(); 
      require_once 'view/entreprise/listes.php';
    }

}

