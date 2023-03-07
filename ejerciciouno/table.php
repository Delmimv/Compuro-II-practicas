<?php

//incluimos archibos de funciones
include "functions.php";

//obtenemos los datos
$data=getData();


?>
 <table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Acciones</th>
        <tr>
    <thead>        
 <table>  
     <tbody>
         <?php foreach($data as $cod => $record){?>
         </tr>
               <td><?php echo $record['name']; ?></td>
               <td><?php echo $record['lastname']; ?></td>
               <td><?php echo $record['age']; ?></td>
               </td>
               <a href="form,php?cod=<?php echo $cod; ?>">Editar</th>"
               </td>
         <?php  } ?>
     <tbody>
 <table>
         }        