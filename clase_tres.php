<?php
    /* 
        Ejercicio 3:
        Crear un lista de números enteros y determinar
        cuantos pares hay
    */
    $listaNumeros = [1,2,3,4,5,6];
    $cantidadPares = 0;
    for ($i=0; $i < count($listaNumeros); $i++) { 
        $residuo = $i % 2;
        if($residuo == 0){
            //$cantidadPares++;
            $cantidadPares = $cantidadPares + 1;
        }
    }

    echo "La cantidad de números pares es: $cantidadPares";
