<?php
require_once 'model/DB.php';

class DispositifModel {

        public $db;

        public function __construct(){

            //Instanciation de la classe DB(base de donnee)
            $this->db = new DB;
        }

        public function listerDispositif(){
            $query = $this->db->dbh->prepare("SELECT * FROM dispositifs_de_formations");
            $query->execute();
            return $query->fetchAll();
        }

        public function findIdDispositif($id){
            $query = $this->db->dbh->prepare("SELECT * FROM dispositifs_de_formations WHERE id_dispositif = ?");
            $query->execute(array($id));
            return $query->fetch();
        }
    }