<?php
session_start();

function validarRegistro($datos){
  $errores = [];
  $datosFinales = [];

  // Limpia espacios al cominenzo y la final de cada campo.
  foreach ($datos as $key => $value) {
    //¿Cuándo no debe trimear?
    $datosFinales[$key] = trim($value);
  }

  //Validaciones
  //=====================

  //Nombre
  if(strlen($datosFinales["name"]) == 0){
    $errores["name"] = "El campo nombre debe estar completo";
  } else if (!ctype_alpha($datosFinales["name"])){
    $errores["name"] = "Por favor ingrese caracteres alfabéticos";
  } //Validar con expresion regular que permita espacios intermedios.

  //Email
  if(strlen($datosFinales["email"]) == 0){
    $errores["email"] = "El campo email debe estar completo";
  } else if(!filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL)){
    $errores["email"] = "Por favor ingrese un email con formato válido";
  } else if(buscarUsuarioPorMail($datosFinales["email"])) {
    $errores["email"] = "El email ya existe. Por favor elija otro.";
  }

  //telefono
  if(strlen($datosFinales["tel"]) ==0){
    $errores["tel"] = "el campo telefono debe estar completo";
  }
  if(strlen($datosFinales["tel"]) == 8){
    $errores["tel"] = "La contraseña debe tener 8 digitos";
  }
  else if(is_numeric($datosFinales)["tel"]){
    $errores["tel"] = "Por favor ingresar caracteres numericos";
  }

  //Password
  if(strlen($datosFinales["pass"]) < 4){
    $errores["pass"] = "La contraseña debe tener al menos 4 caracteres";
  }

  //retype Password
  if(strlen($datosFinales["pass2"]) === 0){
    $errores["pass2"] = "El campo no puede estar vacío.";
  } else if($datosFinales["pass"] !== $datosFinales["pass2"]){
    $errores["pass2"] = "Las contraseñas no coiniceden";
  }

  return $errores;
}

function nextId(){
  $json = file_get_contents("db.json");
  $array = json_decode($json, true);

  $lastUser = array_pop($array["usuarios"]);

  $nextId = $lastUser["id"] + 1;

  return $nextId;

}

function armarUsuario(){
  return [
    "id" => nextId(),
    "nombre" => trim($_POST["name"]),
    "email" =>  trim($_POST["email"]),
    "password" => password_hash($_POST["pass"], PASSWORD_DEFAULT),
  ];
}

function guardarUsuario($user){
  $json = file_get_contents("db.json");
  $array = json_decode($json, true);
  $array["usuarios"][] = $user;

  $json = json_encode($array, JSON_PRETTY_PRINT);
  file_put_contents("db.json", $json);
}

function buscarUsuarioPorMail($email){
  //¿Qué pasa si no hay archivo .json
  $json = file_get_contents("db.json");
  $array = json_decode($json, true);

  foreach ($array["usuarios"] as $usuario) {
    if($usuario["email"] == $email){
      return $usuario;
    }
  }
  return null;
}

?>
