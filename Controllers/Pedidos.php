<?php
    class Pedidos extends Controllers{
        public function __construct() {
            parent::__construct();//ejecutamos el metodo contrustor de la clase heredada
        }
        public function pedidos(){//mandando informacion a las vistas
            $data['page_tag'] = "Pedidos";
            $data['page_title'] = "Pedidos - Cantuta";
            $data['page_name'] = "pedidos";
            $data['page_functions_js'] = "functions_pedidos.js";        
            $this->views->getView($this,"pedidos",$data);
        }

        public function orden(){       
            $data['page_tag'] = "Pedido - Tienda Virtual";
            $data['page_title'] = "Orden - Cantuta";
            $data['page_name'] = "orden";
            //$data['arrPedido'] = $this->model->selectPedido($idpedido,$idpersona);
            $this->views->getView($this,"orden",$data);
        }

    }

?>