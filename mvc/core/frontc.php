<?php
/* Front controller */

define("RUTA_BASE","");
define("RUTA_MVC","../");

require_once('../core/init.php');

$arrRuta=array();
if (isset($_SERVER["PATH_INFO"])){
	 $arrRuta=explode('/',$_SERVER["PATH_INFO"]);
}

 /*
 hay varios casos posibles:
 
 1.- Que no hayan enviado parametros: lanzaremos un error
 2.- Que hayan mandado solo el nombre del controlador
 3.- Que hayan mandado el controlador y la accion
 4.- Que hayan mandado mas parametros
 
 */
 
if (empty($arrRuta)){
	$arrRuta=array('','Home');
}

$controladorName=$arrRuta[1];

include '../controladores/'.$controladorName.'.php';
$className=$controladorName.'Controller';
$controller=new $className;

if (sizeof($arrRuta)==2){
	$controller->render();
}else{	
	$accion=$arrRuta[2];
	$controller->$accion();
}



?>
