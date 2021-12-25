<?php
    class Carrito extends Controllers{
        public function __construct() {
            parent::__construct();
        }
        public function carrito(){
        $data['page_tag'] = "Carrito";
        $data['page_title'] = "Marcas - Cantuta";
        $data['page_name'] = "marcas";
        
        $this->views->getView($this,"carrito",$data);
        }
    }
?>