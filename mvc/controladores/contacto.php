<?php
require_once('../mvc.php');	

$nosotros=new ContactoController();
$nosotros->render();

class ContactoController{

	/*====================================================
	index: Procesa la solicitud de la página contacto.html 	
	*====================================================*/
	function render(){				
		require_once('../vistas/theme1/contacto_view.php');
		$tema= new Theme();
		$vista=new ContactoView();
		$tema->setVista($vista);
		$footer=new Vista();
		$tema->setFooter($footer);
		$tema->render();
	}
}
?>