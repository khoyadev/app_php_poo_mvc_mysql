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
        public function findEntrepriseId($id){
            $query = $this->db->dbh->prepare("SELECT * FROM entreprises WHERE id_entreprise = ?");
            $query->execute(array($id));
            return $query->fetch();
        }
        public function modifier($nom_entreprise, $coordonnees, $ninea, $rccm, $date_creation, $page_web, $nombre_employe, $organigramme, $cotisations_sociales, $contrat, $id_repondant, $id_domaine, $id_dispositif, $id_regime, $id_quartier, $id_entreprise){
            $query = $this->db->dbh->prepare("UPDATE entreprises SET nom_entreprise = ?, coordonnees = ?, ninea = ?, rccm = ?, date_creation = ?, page_web = ?, nombre_employe = ?, organigramme = ?, cotisations_sociales = ?, contrat = ?, id_repondant = ?, id_domaine = ?, id_dispositif = ?, id_regime = ?, id_quartier = ? WHERE id_entreprise = ?");
            return $query->execute(array($nom_entreprise, $coordonnees, $ninea, $rccm, $date_creation, $page_web, $nombre_employe, $organigramme, $cotisations_sociales, $contrat, $id_repondant, $id_domaine, $id_dispositif, $id_regime, $id_quartier, $id_entreprise));
        }

        public function findIdRepondant($id){
            $query = $this->db->dbh->prepare("SELECT * FROM repondants WHERE id_repondant = ?");
            $query->execute(array($id));
            return $query->fetch();
        }
        public function findIdDomaine($id){
            $query = $this->db->dbh->prepare("SELECT * FROM  domaines WHERE id_domaine = ?");
            $query->execute(array($id));
            return $query->fetch();
        }
        public function findIdDispositif($id){
            $query = $this->db->dbh->prepare("SELECT * FROM dispositifs_de_formations WHERE id_dispositif = ?");
            $query->execute(array($id));
            return $query->fetch();
        }
        public function findIdRegime($id){
            $query = $this->db->dbh->prepare("SELECT * FROM regimes WHERE id_regime IN (SELECT id_regime FROM entreprises WHERE id_regime = ?)");
            $query->execute(array($id));
            return $query->fetch();
        }
        public function findIdQuartier($id){
            $query = $this->db->dbh->prepare("SELECT * FROM quartiers WHERE id_quartier = ?");
            $query->execute(array($id));
            return $query->fetch();
        }

        public function supprimer($id){
            $sql = $this->db->dbh->prepare("DELETE FROM entreprises WHERE id_entreprise = :idEntreprise");
            $sql->bindValue(":idEntreprise",$id);
            return $sql->execute();
     
         }
}