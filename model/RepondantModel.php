<?php
require_once 'model/DB.php';

class RepondantModel {

        public $db;

        public function __construct(){

            //Instanciation de la classe DB(base de donnee)
            $this->db = new DB;
        }

        public function listerRepondant(){
            $query = $this->db->dbh->prepare("SELECT * FROM repondants");
            $query->execute();
            return $query->fetchAll();
        }

        public function findIdRepondant($id){
            $query = $this->db->dbh->prepare("SELECT * FROM repondants WHERE id_repondant = ?");
            $query->execute(array($id));
            return $query->fetch();
        }
    }

    