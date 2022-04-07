<?php
require_once 'model/DB.php';

class DomaineModel {

        public $db;

        public function __construct(){

            //Instanciation de la classe DB(base de donnee)
            $this->db = new DB;
        }

        public function listerDomaine(){
            $query = $this->db->dbh->prepare("SELECT * FROM  domaines");
            $query->execute();
            return $query->fetchAll();
        }

        public function findIdDomaine($id){
            $query = $this->db->dbh->prepare("SELECT * FROM  domaines WHERE id_domaine = ?");
            $query->execute(array($id));
            return $query->fetch();
        }
    }
