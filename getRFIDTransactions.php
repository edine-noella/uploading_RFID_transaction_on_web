<?php
    include_once("RFIDManager.php");
    $rfidObj = new RFIDManager();
    $rfidObj->saveTransaction("RFID_004",343,2343);
    //  if(!empty($_GET["field1"])){
    //     $rfidObj->saveTransaction($_GET["field1"], $_GET["field2"], $_GET["field3"], date("Y-m-d H:i:s", time() + 2*60*60));
    // }
?>