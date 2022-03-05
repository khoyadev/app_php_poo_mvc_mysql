<?php
class DB {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'passer';
    private $dbname = 'app_php_poo_mvc_mysql';

    //Will be the PDO object
    public $dbh;
    private $stmt;
    private $error;

    public function __construct(){
        //Set DSN
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
        
        $options = array(
            //PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        //Create PDO instance
        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        }catch(PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
}