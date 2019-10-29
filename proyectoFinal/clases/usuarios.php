<?php
/**
 *
 */
// include "dbjson.php"; Está incluido en init.php junto con la instancia.

class Usuario
{ //Atributos
  private $id;
  private $name;
  private $apellido;
  private $email;
  private $password;

  //Constructor
  function __construct(Array $array)
  {
    // 2 Origenes: 1ra es desde el formulario de registro. 2da
    global $db; //Tremos la instancia de base de datos para poder usarla. Otra opción es pasarla por parámetro.

    if(isset($array["id"])){
      $this->id = $array["id"];
      $this->password = $array["password"];
    } else {
      //Este if resuelve si usamos json o mysql
      if ($db instanceof DbJson ){
        $this->id = $json->nextId(); //nextID();
      } else {
        $this->id = null;
      }
      $this->password = password_hash($array["password"], PASSWORD_DEFAULT);
    }
    $this->name = $array["nombre"];
    $this->apellido = $array["apellido"];
    $this->email = $array["email"];


  }

  //Métodos
  public function getId(){
    return $this->id;
  }
  public function getName(){
    return $this->name;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getPassword(){
    return $this->password;
  }



}
