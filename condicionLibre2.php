<?php
/*@return array
*/ function cargarMascotas(){
//$misMascotas es un arreglo multidimensional indexado con arreglos asociativos.
$arregloMascotas=[];
$arregloMascotas[0]=["nombre" => "Gonzo", "edad" => "9", "tipo" =>
"perro",];
$arregloMascotas[1]=["nombre" => "Peggy", "edad" => "3", "tipo" =>
"puerco",];
$arregloMascotas[2]=["nombre" => "Harry", "edad" => "4", "tipo" =>
"hamster",];
return $arregloMascotas;
}
/*Recibe arreglo y retorna string con los datos de la mascota.
*@param array $mascota
*@return string
*/function mostrarMascota($mascota){
//va a recibir un arreglo asociativo ya que su indice es un string o clave.
$datosMasc = $mascota["nombre"] ." es " . $mascota["tipo"] . " de "
. $mascota["edad"] . " años";
return $datosMasc;
}
/*Muestra los datos de las mascotas a partir de un foreach (recorrido
exhautivo).
*@param array $arrayMascotas
*/
function mostrarDatosMascotas($arrayMascotas){
    //$infoMascota es el elemento de $arrayMascotas[$indice]
    foreach($arrayMascotas as $indice => $infoMascota){
    echo "Mascota ".$indice+1 .": ". mostrarMascota($infoMascota);
    }
    }
    /* Recibo dos parametros de entrada, un arreglo y un entero.
    * @param array $arregloMascotas
    * @param int $edad
    * @return int
    */
    function buscarPrimerMenorA($arregloMascotas, $edad){
    $i=0;
    $numerito=-1;
    //estamos buscando una mascota que tenga edad menor a $edad.
    while($i<count($arregloMascotas) &&
    $arregloMascotas[$i]["edad"]>=$edad){
    $i++;
    }
    if($i!=count($arregloMascotas)){
    $numerito=$i;
    }
    return $numerito;
    }
    /** programa principal
    * int $edadMascota, $indiceMenor
    * array $datosMascotas
    */
    $datosMascotas = cargarMascotas();
    echo "Ingrese una edad para buscar una mascota menor: ";
    $edadMascota = trim(fgets(STDIN));
    $indiceMenor = buscarPrimerMenorA($datosMascotas, $edadMascota);
    if ($indiceMenor != -1){
    echo mostrarMascota($datosMascotas[$indiceMenor]);
    } else {
    echo "No existe una mascota con edad menor a la ingresada";
    }
    ?>