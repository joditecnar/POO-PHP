<?php

class EnlacesPaginas{

    public function enlacesPaginasModel($enlacesModel){

        if($enlacesModel == "inicio" ||
            $enlacesModel == "nosotros" || 
            $enlacesModel == "servicios" || 
            $enlacesModel == "contactenos"){

                $module = "view/modules/".$enlacesModel.".php";

            }

            return $module;
       
    }

}


?>