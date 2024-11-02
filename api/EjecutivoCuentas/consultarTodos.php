<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarTodosRespuesta.php';
require_once '../../modelo/ListEjecutivoDeCuentas.php';

$resp= new ConsultarTodosRespuesta();

$EjecutivoDeCuentas1= New ListEjecutivoDeCuentas();
$EjecutivoDeCuentas1->Id=1;
$EjecutivoDeCuentas1->Descripcion='Ejecutivo 1';
$EjecutivoDeCuentas1->Usuario='comercia';

$EjecutivoDeCuentas2= new ListEjecutivoDeCuentas();
$EjecutivoDeCuentas2->Id=2;
$EjecutivoDeCuentas2->Descripcion='Ejecutivo 2';
$EjecutivoDeCuentas2->Usuario='javkin';


$resp->ListEjecutivoDeCuentas[]=$EjecutivoDeCuentas1;
$resp->ListEjecutivoDeCuentas[]=$EjecutivoDeCuentas2;

echo json_encode ($resp);