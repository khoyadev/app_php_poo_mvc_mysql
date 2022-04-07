<?php
require_once 'model/DB.php';

class DepartementModel {

        public $db;

        public function __construct(){

            //Instanciation de la classe DB(base de donnee)
            $this->db = new DB;
        }
    }