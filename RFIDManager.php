<?php   
    include_once("dbConnector.php");  
    class RFIDManager extends DatabaseConnection{
        private $TBL_TRANSACTIONS = "transactions"; 
        public function saveTransaction($UUID, $initial_balance, $cost){
            $sql ="INSERT INTO ".$this->TBL_TRANSACTIONS."(UUID, initial_balance, cost , final_balance) 
            VALUES(:customer, :initial_balance, :transport_fare, :new_balance)";
            $q=parent::__construct()->prepare($sql);
            $q->bindValue(":customer", $UUID);
            $q->bindValue(":initial_balance", $initial_balance);
            $q->bindValue(":transport_fare", $cost);
            $q->bindValue(":new_balance", $initial_balance - $cost);
             echo $sql;
            if($q->execute()){
              echo "Success";  
            }else{
                echo "transaction failed";
            }
        }
    } 
?>    