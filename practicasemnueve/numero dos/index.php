<?php
//interfaces
interface Imascota{
    public function getNombre();
    public function getEdad();

}

interface Imamifero{
    public function sonido();
}

//implementacion de interfaces
class Gato implements Imascota, Imamifero{
    public $name;
    public $edad
    
    function __construct($_nombre, 4_edad){
        $this->nombre = $_nombre:
        $this->edad = $_edad;
    }
    public function getNombre(){
        return $this->nombre;

    }
    public function getEdad(){
        return $this->edad;
    }
    public function sonido(){echo "miau"; }

    }
$gato = new Gato ("firulay", 1);
echo $gato->getNombre();
echo $gato->getEdad();
$gato->sonido();

?>