<?php


$km_inicio = $_POST['km_inicio'];
$km_fim = $_POST['km_fim'];
$data = $_POST['data'];

$timestamp = strtotime($data);
$novaData = date('d/m/y',$timestamp);

$resultado = $km_inicio - $km_fim;

?>