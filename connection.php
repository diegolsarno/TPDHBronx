<?php

$dsn = "mysql:host=127.0.0.1;dbMysql=basebronx;port=3306";
$user = "root";
$pass = "root";

// me falta $baseDeDatos?????? //

try {
$db = new PDO($dsn, $user, $pass);
$db = setAttribute(PDO::ATRR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (\Exception $e){
    echo "Hubo un error"  
};

?>
