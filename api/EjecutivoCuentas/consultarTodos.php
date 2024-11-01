<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarTodosRespuesta.php';

$resp= new ConsultarTodosRespuesta();




echo json_encode ($resp);