<?php   
include "connection.php";


$query=$db->prepare("INSERT INTO bronx.users VALUES(:nombre,:apellido,:email)");

$query->bindValue(":nombre", "Roberto");
$query->bindValue(":apellido", "Lopez");
$query->bindValue(":email", "Roberto@gmail.com");

$query->execute();


?>






