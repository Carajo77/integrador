<?php
// SDK de Mercado Pago
require '../vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-6748670149676472-121804-0814d315553ee2a49f51df84193c5507-293508655');
MercadoPago\SDK::setPublicKey('TEST-4f3fd4a4-c611-4d3f-b143-3697cfe761d3');

 



// Crea un ítem en la preferencia
$preference = new MercadoPago\Preference();
  # Crea ítems en la preferencia
  $item1 = new MercadoPago\Item();
  $item1->title = "Item de Prueba 1";
  $item1->quantity = 2;
  $item1->unit_price = 11.96;

  $item2= new MercadoPago\Item();
  $item2->title = "Item de Prueba 2";
  $item2->quantity = 1;
  $item2->unit_price = 11.96;

  $preference->items = array($item1,$item2);
  # Guardar y postear la preferencia
  $preference->save();

// var_dump($preference);





?>
<form action="/procesar-pago" method="POST">
  <script
   src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
   data-preference-id="<?php echo $preference->id; ?>" data-button-label="Reservar">
  </script>
</form>
