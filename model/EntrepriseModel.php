<?php
require_once 'model/DB.php';

class EntrepriseModel {

    public $db;

    public function __construct(){

        //Instanciation de la classe DB(base de donnee)
        $this->db = new DB;
    }

    public function lister(){
        $query = $this->db->dbh->prepare("SELECT * FROM entreprises");
        $query->execute();
        return $query->fetchAll();
    }
    public function listerRepondant(){
        $query = $this->db->dbh->prepare("SELECT * FROM repondants");
        $query->execute();
        return $query->fetchAll();
    }
    public function listerDomaine(){
        $query = $this->db->dbh->prepare("SELECT * FROM  domaines");
        $query->execute();
        return $query->fetchAll();
    }
    public function listerDispositif(){
        $query = $this->db->dbh->prepare("SELECT * FROM dispositifs_de_formations");
        $query->execute();
        return $query->fetchAll();
    }
    public function listerRegime(){
        $query = $this->db->dbh->prepare("SELECT * FROM regimes");
        $query->execute();
        return $query->fetchAll();
    }
    public function listerQuartier(){
        $query = $this->db->dbh->prepare("SELECT * FROM quartiers");
        $query->execute();
        return $query->fetchAll();
    }
    public function inserrerEntreprise($nom_entreprise, $coordonnees, $ninea, $rccm, $date_creation, $page_web, $nombre_employe, $organigramme, $cotisations_sociales, $contrat, $id_repondant, $id_domaine, $id_dispositif, $id_regime, $id_quartier){
        //Preparer la requete
        $queryPrepare = $this->db->dbh->prepare("INSERT INTO entreprises (nom_entreprise, coordonnees, ninea, rccm, date_creation, page_web, nombre_employe, organigramme, cotisations_sociales, contrat, id_repondant, id_domaine, id_dispositif, id_regime, id_quartier) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        //Execution de la requete preparer
        return $queryPrepare->execute(array($nom_entreprise, $coordonnees, $ninea, $rccm, $date_creation, $page_web, $nombre_employe, $organigramme, $cotisations_sociales, $contrat, $id_repondant, $id_domaine, $id_dispositif, $id_regime, $id_quartier));
    }
//     public function findUsernamePwd($username, $password){
//         $query = $this->db->dbh->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
//         $query->execute(array($username, $password));
//         return $query->fetch();
//    }

}