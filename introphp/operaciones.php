>?php
//evaluar si se esta enviando algo
if(isset)

//declarar 
$num1 = 10;
$num2 = 0;
$operacion = "division";

//operacionbes a realizar
$operaciones = array("suma", "resta", "multiplicacion", "division");

//evaluar si la operacion no existe en el array $operaciones
if(!in_aray($operacion, $operaciones)){
    echo "la operacion no es valida";
    exit();

}
switch($operacion){
    case: "suma";
    $resultado = $num1 + $num2;
    break;
    case: "resta";
    $resultado = $num1 - $num2;
    break;
    case: "multiplicacion";
    $resultado = $num1 * $num2;
    break;
    case: "division";
    if ($num2==0){
        echo "no se puede dividir entre cero";
        exit();
    }
$resultado = $num1 / $num2;
break;

}
echo "el resultado de la $operacion de $num1 y $num2 es: $resultado";

?>