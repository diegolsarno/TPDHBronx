<?php
include "db.php";

class dbmysql extends db;
{
private $db;

public function__construct() {

$dsn = "mysql:host=127.0.0.1;dbMysql=bronx;port=3306";
$user = "root";
$pass = "root";

try {
$this->$db = new PDO($dns, $user, $pass);
$this->$db = setAttribute(PDO::ATRR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (\Exception $e){
    echo "Hubo un error. Mensaje:"
    var_dump/$e->getMessage());
    $db = null;
}
}

public function guardarUsuario(Usuario $user, string $file = null){
global $db;
$stmt = $this->db->prepare("INSERT INTO usuarios VALUE(default, :name, :email, :password)");

$stmt->bindValue(":name", $user->getName());
$stmt->bindValue(":email", $user->getEmail());
$stmt->bindValue(":password", password_hash, $user->getPassword());

$stmt->execute();
}

public function buscarUsuarioPorMail(string $email){
global $db;
$stmt = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email");
$stmt->bindValue(":email, $email");
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
