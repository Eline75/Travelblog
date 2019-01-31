
<?php

//require_once("connect.php");

class Data {
    public $connection=null;

function __construct(){
   $this->connection = new PDO("mysql:host=192.168.10.10;dbname=travelblog", 'root', '');
   $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
function __destruct() 
 {
$this->connection=null;

 }
}

?>