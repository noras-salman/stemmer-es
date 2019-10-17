<?php
require_once 'stemm_es.php';
$string = "Fue un domingo. En el Teatro Royal del sector céntrico de la capital del Cesar se entretenían con la película ‘En busca del oro perdido’. Mientras tanto, al otro lado de la calle alrededor de 30 personas (con participación directa e indirecta) se apoderaban de 24.072 millones de pesos (unos 30 millones de dólares) producto de las consignaciones de fin de semana de las entidades bancarias del centro y norte del Cesar, y del sur de La Guajira.";

echo var_dump(stemm_es::stemmp($string));
?>