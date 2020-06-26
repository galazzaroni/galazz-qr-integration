<?php

// Crea el pos

header('Content-type: application/json');

include_once '../../global/functions.php';

 // REVISA AQUÍ:
 // Qué método y endpoint de la API de Mercado Pago deberías poner aquí para poder   
 // crear un POS/QR?
 // Sustituye el método por su correspondiente: get, put, post, delete

curl_call("post","https://api.mercadopago.com/pos", $_POST["json"]);

?>
