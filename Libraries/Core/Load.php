<?php
    //Load
    $controllerFile = "Controllers/".$controller.".php";
    if(file_exists($controllerFile))
	{
		require_once($controllerFile);
		$controller = new $controller();//variable que enviamos
		if(method_exists($controller, $method))//validamos el metodo
		{
			$controller->{$method}($params);
		}else{
			require_once("Controllers/Error.php");
           // echo "no existe metodo";
		}
	}else{
        //echo "no existe";
        require_once("Controllers/Error.php");
    }
?>