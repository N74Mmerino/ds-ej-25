<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/agregarRespuesta.php';
require_once 'modelosRequest/agregarRequest.php';
require_once '../../modelo/EjecutivoDeCuentas.php';

//se obtiene el body
$json = file_get_contents('php://input',true);
// Convertir el body en un objeto
$req = json_decode($json);

$resp= new AgregarRespuesta();

$resp->EjecutivoDeCuentas = new EjecutivoDeCuentas();

$resp->EjecutivoDeCuentas->Id=1;
$resp->EjecutivoDeCuentas->Descripcion=$req->DescripcionEjecutivoDeCuenta ;
$resp->EjecutivoDeCuentas->Usuario='Anonimo';


echo json_encode ($resp);