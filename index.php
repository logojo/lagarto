<?php

function lagarto ($u) {
   $h = 6;
   $d = 1;
   $f = 0.1;
   $aInicial = 0;
   $aAnterior = 0; 
   $dia = 0;
   $i = 0;
   $failure = false;

   while ($aInicial < $h) {
        if($i > count($u) - 1) {
            echo('failure on day ' . $dia);
            $failure = true;
            break;
        }

        $aAnterior = $u[$i]; 
        $alturaFatiga = $aAnterior * (1 - $f); 

        if($alturaFatiga <= 0) {
            echo('failure on day ' . $dia);
            $failure = true;
            break;
        }

        $aInicial += $alturaFatiga;

        if($aInicial < $h && $aInicial != 0) {
            $aInicial -= $d;
        }
        
        $aAnterior = $alturaFatiga;
        $dia++;
        $i++;
   }

   if( !$failure )
       echo('success on day ' . $dia);

}
//casos de uso 

$u = [6, 3, 1, 10];
$u1 = [10, 2, 1, 50];
$u2 = [50, 5, 3, 14];
$u3 = [50, 6, 4, 1];
$u4 = [50, 6, 3, 1];
$u5 = [1, 1, 1, 1];
$u6 = [0, 0, 0, 0];
$u7 = [3, 3, 3, 3];

lagarto($u);
echo("<br>");
lagarto($u1);
echo("<br>");
lagarto($u2);
echo("<br>");
lagarto($u3);
echo("<br>");
lagarto($u4);
echo("<br>");
lagarto($u6);
echo("<br>");
lagarto($u7);
?>

