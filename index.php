<?php 
/*
Comentario
en bloque
*/
// Comentario por lineas

// DECLARACIÓN DE VARIABLES

// Variable de tipo String, pero pesada (memoria)
$nombre = "Cristhian";
// Variable de tipo String, pero liviana (memoria)
$apellidos = 'Cañar';

// Variables numericas
// Entero = Int
$edad = 25;
// Decimal = Double o Float
$saldo = 100.25;

// Variable de tipo logico o booleano
$estaLloviendo = false;
$siEstaLloviendo = true;

// Funciones en php
function ejemplo(){
    return 2+2;
}

function suma($numUno, $numDos){
    return $numUno+$numDos;
}

// POO
// Crear una clase vehiculo con los atributos
// Atributos: marca, modelo, categoria, color, velocidad
// Metodos: acelerar(), frenar()

class Vehiculo{
    public $marca;
    private $modelo;
    public $categoria;
    public $color;
    public $velocidad;

    public function __construct(
        $marca,
        $modelo,
        $categoria,
        $color,
        $velocidad
    ){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->categoria = $categoria;
        $this->color = $color;
        $this->velocidad = $velocidad;
    }

    public function acelerar($cantidad){
        $this->velocidad = $this->velocidad + $cantidad;
        echo "Has acelerado $cantidad km/h <br>";
        echo "Velocidad actual ".$this->velocidad." km/h <br>";
    }

    public function frenar(){

    }
}

// Crear un objeto de la clase Vehiculo
$coche = new Vehiculo(
    "Chevrolet",
    "2024",
    "Publico",
    "Gris",
    10
);

function mostrarInfo($coche){
    echo "Marca: ".$coche->marca."<br>";
    echo "Velocidad: ".$coche->velocidad."<br>";
}

mostrarInfo($coche);

$coche->acelerar(50);

mostrarInfo($coche);



?>
