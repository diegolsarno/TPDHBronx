<?php   
include "connection.php";


$query=$db->prepare("INSERT INTO users VALUES(default,:nombre,:apellido,:email)");

$query->bindValue(":nombre", "Roberto");
$query->bindValue(":apellido", "Lopez");
$query->bindValue(":email", "Roberto@gmail.com");

$query->execute();


?>






