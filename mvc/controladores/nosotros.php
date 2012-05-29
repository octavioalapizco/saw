<?php
require_once('../core/init.php');

$nosotros=new NosotrosController();
$nosotros->render();

class NosotrosController{

	/*====================================================
	index: Procesa la solicitud de la página Nosotros.html 	
	*====================================================*/
	function render(){				
		require_once('../vistas/theme1/nosotros_view.php');
		$tema= new Theme();
		$vista=new NosotrosView();
		$tema->setSeccion('contenido',$vista);
		
		$tema->render();
	}
}
?>