<?php
require_once 'model/DB.php';

class RegimeModel {

        public $db;

        public function __construct(){

            //Instanciation de la classe DB(base de donnee)
            $this->db = new DB;
        }

        public function listerRegime(){
            $query = $this->db->dbh->prepare("SELECT * FROM regimes");
            $query->execute();
            return $query->fetchAll();
        }

        public function findIdRegime($id){
            $query = $this->db->dbh->prepare("SELECT * FROM regimes WHERE id_regime IN (SELECT id_regime FROM entreprises WHERE id_regime = ?)");
            $query->execute(array($id));
            return $query->fetch();
        }
    }