<?php
    class Tienda extends Controllers{
        public function __construct() {
            parent::__construct();//ejecutamos el metodo contrustor de la clase heredada
        }
        public function Tienda(){//mandando informacion a las vistas
            $data['page_tag'] = "Tienda";
            $data['page_title'] = "Tienda - Cantuta";
            $data['page_name'] = "productos";
            $data['page_functions_js'] = "functions_tienda.js";
            $this->views->getView($this,"tienda",$data);
        }
    }
?>