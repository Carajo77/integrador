<?php
// SDK de Mercado Pago
require '../vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-6748670149676472-121804-0814d315553ee2a49f51df84193c5507-293508655');
MercadoPago\SDK::setPublicKey('TEST-4f3fd4a4-c611-4d3f-b143-3697cfe761d3');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();

if($preference){
	echo "hola";
}else {
	echo "chau";
}


?>