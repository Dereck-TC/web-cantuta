<?php
    class Errors extends Controllers{
        public function __construct() {
            parent::__construct();//ejecutamos el metodo contrustor de la clase heredada
        }
        public function notFound(){
            //echo"Mensaje desde el controlador";
            $this->views->getView($this,"error");
        }
       
    }
    $notFound = new Errors();
    $notFound->notFound();
?>