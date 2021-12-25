<?php
    class Marcas extends Controllers{
        public function __construct() {
            parent::__construct();//ejecutamos el metodo contrustor de la clase heredada
        }
        public function marcas(){//mandando informacion a las vistas
            $data['page_id'] = 2;
            $data['page_tag'] = "Marcas";
            $data['page_title'] = "Marcas - Cantuta";
            $data['page_name'] = "marcas";
            $data['page_functions_js'] = "functions_marcas.js";        
            $this->views->getView($this,"marcas",$data);
        }
        
        public function getMarcas(){
			
            $arrData = $this->model->selectMarcas();
            for ($i=0; $i < count($arrData); $i++) {
                $btnView = '';
                $btnEdit = '';
                $btnDelete = '';

                if($arrData[$i]['status'] == 1)
                {
                    $arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
                }else{
                    $arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
                }

                
                    $btnView = '<button class="btn btn-info btn-sm" onClick="fntViewInfo('.$arrData[$i]['idmarca'].')" title="Ver categoría"><i class="far fa-eye"></i></button>';
                
                
                    $btnEdit = '<button class="btn btn-primary  btn-sm" onClick="fntEditInfo(this,'.$arrData[$i]['idmarca'].')" title="Editar categoría"><i class="fas fa-pencil-alt"></i></button>';
                
                
                    $btnDelete = '<button class="btn btn-danger btn-sm" onClick="fntDelInfo('.$arrData[$i]['idmarca'].')" title="Eliminar categoría"><i class="far fa-trash-alt"></i></button>';
                
                $arrData[$i]['options'] = '<div class="text-center">'.$btnView.' '.$btnEdit.' '.$btnDelete.'</div>';
            }
            echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
        
        die();
    }
    }
?>