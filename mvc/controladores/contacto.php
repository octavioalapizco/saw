<?php
require_once('../core/init.php');

$nosotros=new ContactoController();
$nosotros->render();

class ContactoController{

	/*====================================================
	index: Procesa la solicitud de la página contacto.html 	
	*====================================================*/
	function render(){				
		require_once('../vistas/theme1/contacto_view.php');
		$pagina= new Layout();
		$vista=new ContactoView();
		$pagina->setSeccion('contenido',$vista);		
		$pagina->render();
	}
}
?>