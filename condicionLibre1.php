<?php
/** La funcion calcula el bono, basándose en las zonas y el estado civil del empleado,
*retornando el valor del bono anual.
*@param int $zona
*@param string $estadoCivil
*@return float
*/function calcularBono($zona, $estadoCivil){
if($zona==1){
$bono=60000;
}elseif($zona==2){
$bono=32000;
}elseif($zona==3){
$bono=45000;
}else{
$bono=38000;
}
if($estadoCivil=="C"){
$bono=$bono+((5/100)*$bono);
}
return $bono;
}

/** Programa principal
* Se solicita por cantidad de empleados sus datos y se calcula cuanto debe pagar la empresa
*total por bonos anuales y el porcentaje de casados.
*int $zonas, $cantEm, $i, $sumaCasados, $porcentajeCasa
*string $estCiv
*float $sumaBonos, $bonos
*/
$porcentajeCasa=0;
$sumaBonos=0;
$sumaCasados=0;
echo("¿Cual es la cantidad de empleados que posee la petrolera?");
$cantEm = trim(fgets(STDIN));
if($cantEm==0){
echo("No se registraron empleados.");
}
for($i=1; $i<=$cantEm; $i++){
echo("¿Cual es el numero de zona del empleado?");
$zonas = trim(fgets(STDIN));
echo("¿Cual es el estado civil del empleado?");
$estCiv = trim(fgets(STDIN));
$bonos=calcularBono($zonas, $estCiv);
$sumaBonos= $sumaBonos + $bonos;
if($estCiv=="C"){
$sumaCasados=$sumaCasados+1;
$porcentajeCasa=($sumaCasados*100)/$cantEm;
}
echo("La empresa debe pagar en bonos un total de: $" .$sumaBonos."\n" );
echo("El porcentaje de casados de la empresa es de: %" .$porcentajeCasa);
}
?>