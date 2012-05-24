<?php
require_once('../mvc.php');	

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
		$tema->setVista($vista);
		$footer=new Vista();
		$tema->setFooter($footer);
		$tema->render();
	}
}
?>