<?php

#clase: es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento, estado e identidad.

class Automovil{
    #Propiedades: son las caracteristicas que puede tener un objeto.

    public $marca; 
    public $modelo; 

    #metodo: es el algoritmo asociado a un objeto que indica la capacidad de lo que este puede hacer.
    #un metodo es diferente de una función

    public function mostrar(){
        #aqui se declara la clase

        echo "<p> Muy buenas, soy su asesor para  $this->marca, modelo $this->modelo </p>";

        #aqui se declara el objeto

    }

}

#objeto: es un entidad provista de metodos o mensajes a los cuales responde propiedades con valores concretos.

$a = new Automovil();
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a -> mostrar ();

$b = new Automovil();
$b -> marca = "Nissan";
$b -> modelo = "Sentra";
$b -> mostrar ();




?>