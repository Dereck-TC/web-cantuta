<?php
    class Home extends Controllers{
        public function __construct() {
            parent::__construct();//ejecutamos el metodo contrustor de la clase heredada
        }
        public function home(){//mandando informacion a las vistas
            $data['page_id'] = 1;
            $data['page_tag'] = "Home";
            $data['page_title'] = "pagina principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vitae alias cumque rerum. 
            Eum voluptatum illo beatae, aut, eaque cumque explicabo, 
            rem quis animi culpa ipsum iste molestiae ipsa assumenda?";
            $this->views->getView($this,"home",$data);
        }
       
    }
?>