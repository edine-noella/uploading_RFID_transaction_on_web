<?php
    class DatabaseConnection{
        private $host="localhost";
        private $user="root";
        private $db="RFID";
        private $pass="";
        private $con;
        public function __construct(){
            try{
                $this->con = new PDO("mysql:host=".$this->host."; dbname=".$this->db, $this->user, $this->pass);
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->con;
            }
            catch(PDOException $error){
                echo "Connection failed";
                echo $error->getMessage();
            }            
        } 
    }
?>  