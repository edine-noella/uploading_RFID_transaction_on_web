<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
       <script type="text/javascript">
            function loaddataTable(){  
            $.ajax({
      url: "Data.php",
      type: "post",
      data: {action: "exposition"},
      success: function(result) {
            $("#dataTable").html(result);
    }});
       }  
      loaddataTable();
 </script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "RFID";

echo "<table id='dataTable' style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>UUID</th><th>Initial Balance</th><th>Cost</th><th>Final Balance</th></tr>";
class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM transactions");
  $stmt->execute();
  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

?>