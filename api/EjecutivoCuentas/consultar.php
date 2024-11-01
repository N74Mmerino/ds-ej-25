<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarRespuesta.php';


$resp= new ConsultarRespuesta();




echo json_encode ($resp);