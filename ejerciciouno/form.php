<?php
include "functions.php";
//verificamos 
if(isset($_GET['cod'])){
    $cod=$_GET['cod'];
    $data=getData();
    $record=$data[$cod];
    $action="editar";
}else{
    $record=array(
        'name'=>'';
        'lastname'=>'';
        'age'=>'';
    );
    $action="Guardar";

}

?>

<form action="crud.php" method="POST">
    <input type="text" name="action" value=">?php echo = $action; ?>">
    <php if($action == "editor"){ ?>
        <input type="text" name="cod" value="<?php echo $cod; ?>" />
        <?php
    } ?>

    nombre
    <input type="text" name="name" id="name" value="<?php echo $record['name']; ?>">
    apellido
    <input type="text" name="lastname" id="lastmame"<?php echo $record['lastname']; ?>">
    edad
    <input type="number" name="age" id="age"><?php echo $record['age']; ?>">
    <button type="submit">Guardar</button>
</form>
