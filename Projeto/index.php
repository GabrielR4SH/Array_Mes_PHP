<?php 

$mes = $_GET["mes"];

$select = $mes;

$mes = array(
1 => "Janeiro",
2=> "Fevereiro",
3=> "Março",
4=> "Abril",
5=> "Maio",
6=> "Junho",
7=> "Julho",
8=> "Setembro",
9=> "Agosto",
10=> "Outubro",
11=> "Novembro",
12=> "Dezembro"
);

print_r($mes[$select]);

?>