<?php

class MvcController{

    #Llamado a la plantilla
    #-----------------------------------------------------------------

    public function plantilla (){

        include "view/template.php";

    }

    #Interaccion del usuario
    #-----------------------------------------------------------------
    public function enlacesPaginasController(){

        $enlacesController = $_GET["action"];

        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

        include $respuesta;
    
    }
}

?>