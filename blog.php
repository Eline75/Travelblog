<?php

require_once("connect.php");

try {
    //$conn = new PDO("mysql:host=localhost;dbname=travelblog", 'root', '');
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $conn=new Data();
	$stmt = $conn->connection->query("SELECT * FROM blogger WHERE 1;");
	while ($row = $stmt->fetch()) {
		echo "<p>" . $row["Blog"];

    
		echo "</p>";
	}	
		
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;		
	
?>



   