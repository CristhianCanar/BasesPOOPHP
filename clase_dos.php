<?php 
// POO
// 2.   En base a la clase Vehiculo, va a crear 
//      3 vehiculos y los va a agregar a una lista.
//      luego va recorrer la lista para mostrar los datos
//      de cada vehiculo.

class Vehiculo{
    public $marca;
    public $modelo;
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

$cocheDos = new Vehiculo(
    "Nissan",
    "2000",
    "Privado",
    "Azul",
    20
);
// Creación de la lista de coches
$listaCoches = [$coche, $cocheDos];
function mostrarInfo($coches){
    foreach($coches as $coche){
        echo "____________ <br>";
        echo "Marca: ".$coche->marca."<br>";
        echo "Modelo: ".$coche->modelo."<br>";
        echo "Velocidad: ".$coche->velocidad."<br>";    
        echo "____________ <br>";
    }
    
}

mostrarInfo($listaCoches);
?>
