<?php

// Crea una store

header('Content-type: application/json');

include_once '../../global/functions.php';

 // REVISA AQUÍ:
 // Qué método y endpoint de la API de Mercado Pago deberías poner aquí para poder   
 // crear una store en base a su collector_id y el JSON enviado?
 // Sustituye el método por su correspondiente: get, put, post, delete
 // Pista: Revisa detenidamente el endpoint y encuentra el fallo

$json = $_POST["json"];

curl_call("post","https://api.mercadopago.com/users/$collector_id/stores?t=0",$json);

?>
