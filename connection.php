<?php

$dsn = "mysql:host=127.0.0.1;dbMysql=bronx;port=3306";
$user = "root";
$pass = "root";

try {
$db = new PDO($dns, $user, $pass);
$db = setAttribute(PDO::ATRR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (\Exception $e){
    echo "Hubo un error. Mensaje:"  
};

?>
