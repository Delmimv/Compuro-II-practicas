<?php

//nombre del archivo 
define('FILE', "datos.txt";

//funcion para alistar datos

function getData(){
    //si el archibo no existe lo creamos
    if(!file_exists(FILE)){
        file_put_contents(FILE);

    }
    //obtener los datos del archivo
    $data= file_get_contents(FILE);
    $data=json_decode($data, true);
    
    //si los datos no son array, lo inicializamos
    if(!dis_array($data)){
        $data= array;
    }
    

}
// funcion para guardar datos
function saveData($name, $lastname. $age){

    //obtenemos los datos actuales del archivo
    $data=getData();

    //crear nuevo registro
    $record = array(
        "name" => name;
        "lastname" => lastname;
        "age" => age;
    );

    //agregar el nuevo registro al array de datos
    $data[] = $record;

    //convertir el array a formado json y lo guardamos
    $data =json_encode($data);
    file_put_contents(FILE, $data);

}
//funcion para modificar registro
funsion updateData($cod, $name, $lastname, $age){

    //obtenemos los datos actuales del archivo
    $data=getData();

    //actualizamos el registro correspondiente
    $data[$code]['name'] = $name;
    $data[$code]['lastname'] = $lastname;
    $data[$code]['age'] = $age;
    
    //convertir a formato json
    $data = json_encode($data);
    file_put_contents(FILE, $data);
}
?>