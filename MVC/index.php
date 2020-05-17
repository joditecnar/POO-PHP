<?php
#Index: se muestra la salida de las vistas al usuario y tambien a traves de el enviaremos las distintas acciones que el usuario envie al contralador.


require_once "controllers/controller.php";
require_once "models/model.php";

$mvc = new MvcController();
$mvc -> plantilla();


?>