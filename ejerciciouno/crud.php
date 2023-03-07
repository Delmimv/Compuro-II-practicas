<?php
// incluimos en archibo con las funciones
include "functions.php";
//obtener la accion a realizar
$action=$_POST['action'];

//obtener los valores del formulario
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];

//evaluamos las acciones
if($action == "guardar"){
    //guardar los datos en un array
    saveData($name, $lastname, $age);
    //redirigir
    header('Location: index.php');
}
//funcion para editar registro
if($action == "editar"){
    $cod = $_POST['cod'];
}
?>