<?php
require_once 'model/DB.php';

class QuartierModel {

        public $db;

        public function __construct(){

            //Instanciation de la classe DB(base de donnee)
            $this->db = new DB;
        }

        public function listerQuartier(){
            $query = $this->db->dbh->prepare("SELECT * FROM quartiers");
            $query->execute();
            return $query->fetchAll();
        }
        public function findIdQuartier($id){
            $query = $this->db->dbh->prepare("SELECT * FROM quartiers WHERE id_quartier = ?");
            $query->execute(array($id));
            return $query->fetch();
        }
    }