<?php
include "clases/db.php";
include "clases/dbjson.php";
include "clases/dbmysql.php";
include "clases/validator.php";
include "clases/auth.php";
include "clases/usuarios.php";

$auth = new Auth;
// var_dump($auth);

$file = "db.json";
//$db = new DbJson($file);
$db = new DbMysql;
