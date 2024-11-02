<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarRespuesta.php';
require_once '../../modelo/EjecutivoDeCuenta.php';



$resp= new ConsultarRespuesta();

$Ejdc= new EjecutivoDeCuenta();
$Ejdc->Id=$_GET['Id'];
$Ejdc->Descripcion='Ejecutivo 1';
$Ejdc->Usuario='"comercial"';

$resp->EjecutivoDeCuenta=$Ejdc;


echo json_encode ($resp);