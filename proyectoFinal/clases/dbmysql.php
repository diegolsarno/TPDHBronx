<?php


class dbMysql extends db
{
private $dbMysql;

public function __construct()
{
$dsn = "mysql:host=127.0.0.1;dbname=bronx;port=3306";
$user = "root";
$pass = "";

try {
$this->dbMysql = new PDO($dsn, $user, $pass);
$this->dbMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (\Exception $e) {
    echo "Hubo un error. Mensaje:";
    var_dump($e->getMessage());
    $db = null;
}
}

public function guardarUsuario(Usuario $user, string $file = null){

$stmt = $this->dbMysql->prepare("INSERT INTO usuarios VALUES(default, :name, :apellido, :email, :password)");

$stmt->bindValue(":name", $user->getName());
$stmt->bindValue(":apellido", $user->getApellido());
$stmt->bindValue(":email", $user->getEmail());
$stmt->bindValue(":password", $user->getPassword());

$stmt->execute();
}

public function buscarUsuarioPorMail(string $email){

$stmt = $this->dbMysql->prepare("SELECT * FROM usuarios WHERE email = :email");

$stmt->bindValue(":email", $email);
$stmt->execute();

$usuarioArray = $stmt->fetch(PDO::FETCH_ASSOC);
if($usuarioArray){
  $usuario = new Usuario($usuarioArray);

} else {
  $usuario = null;
}
return $usuario;

}


}
?>
