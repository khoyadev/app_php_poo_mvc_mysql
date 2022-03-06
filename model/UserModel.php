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
    public function findUserEmailPwd($email, $password){
        $query = $this->db->dbh->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $query->execute(array($email, $password));
        return $query->fetch();
   }

}