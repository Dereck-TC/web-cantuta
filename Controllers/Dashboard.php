<?php
    class Dashboard extends Controllers{
        public function __construct() {
            parent::__construct();//ejecutamos el metodo contrustor de la clase heredada
            // session_start();
			// //session_regenerate_id(true);
			// if(empty($_SESSION['login']))
			// {
			// 	header('Location: '.base_url().'/login');
			// 	die();
			// }
        }
        public function dashboard(){//mandando informacion a las vistas
            $data['page_id'] = 2;
            $data['page_tag'] = "Dashboard";
            $data['page_title'] = "Dashboard - Cantuta";
            $data['page_name'] = "dashboard";
            $this->views->getView($this,"dashboard",$data);
        }
       
    }
?>