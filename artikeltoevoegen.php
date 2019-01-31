<?php

if (isset($_GET['naamfilter']))
 {
   $naamfilter = $_GET['naamfilter'];
 }
else
  {
	  $naamfilter = '';
  }
try {
    $conn = new PDO("mysql:host=localhost;dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $conn->query("SELECT * FROM blogger WHERE 1");
	while ($row = $stmt->fetch()) {
		echo "<p>" . $row["article"];

    
		echo "</p>";
	}	
		
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;		
	
?>



   