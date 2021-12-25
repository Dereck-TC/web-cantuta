<?php
    class Productos extends Controllers{
        public function __construct() {
            parent::__construct();//ejecutamos el metodo contrustor de la clase heredada
        }
        public function productos(){//mandando informacion a las vistas
            $data['page_tag'] = "Productos";
            $data['page_title'] = "Productos - Cantuta";
            $data['page_name'] = "productos";
            $this->views->getView($this,"productos",$data);
        }
       
    }
?>