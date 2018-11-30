<?php
$mass = range(rand(0,30), rand(40,100));
shuffle($mass);
var_dump($mass);
$max=max($mass);
$min=min($mass);
$indMin=array_search($min, $mass);
$indMax=array_search($max, $mass);
echo "<br><br>Min element on position [$indMin]; Max element on position [$indMax]<br><br>";

$mass[$indMax]=$min;
$mass[$indMin]=$max;
var_dump($mass);
echo "<br><br>Now they have changed places!<br><br>";
?>
