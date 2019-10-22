<?php

/**
 *
 */
class Usuario
{
  private $nombre;
  private $email;
  private $password;

  public function __construct(Array $datos)
  {
    $this->nombre = $datos['nombre'];
    $this->email = $datos['email'];
    $this->password = $this->encriptarPassword($datos['password']);
  }

  private function encriptarPassword($loquesea){
    return password_hash($loquesea, PASSWORD_DEFAULT);
  }


}