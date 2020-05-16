<?php
#codigo imperativo o espagueti

$automovil1 = (object)["marca"=>"Toyota", "modelo"=>"Corolla"];

$automovil2 = (object)["marca"=>"Nissan", "modelo"=>"Sentra"];

function mostrar($automovil){
    echo "<p> Muy buenas, soy tu asesor para tu $automovil->marca, modelo $automovil->modelo </p>";

}
mostrar($automovil1);
mostrar($automovil2);






?>