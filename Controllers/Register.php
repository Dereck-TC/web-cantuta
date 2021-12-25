<?php
    class Register extends Controllers{
        public function __construct() {
            parent::__construct();//ejecutamos el metodo contrustor de la clase heredada
            
        }
        public function register(){//mandando informacion a las vistas
           // $data['page_id'] = 3;
            $data['page_tag'] = "Registro";
            $data['page_title'] = "Registro - Cantuta";
            $data['page_name'] = "registro";
            $data['page_functions_js'] = "functions_login.js";
            $this->views->getView($this,"register",$data);
        }
    }
?>