<?php
require_once 'model/DB.php';

class UserModel {

    public $db;

    public function __construct(){

        //Instanciation de la classe DB(base de donnee)
        $this->db = new DB;
    }

    
    public function inserrerUser($username, $email, $password){
        //Preparer la requete
        $queryPrepare = $this->db->dbh->prepare("INSERT INTO users(username, email, password) VALUES (?, ?, ?)");
        //Execution de la requete preparer
        return $queryPrepare->execute(array($username, $email, $password));
    }
    public function findUsernamePwd($username, $password){
        $query = $this->db->dbh->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $query->execute(array($username, $password));
        return $query->fetch();
   }

}