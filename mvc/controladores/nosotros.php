<?php
/*require_once('../core/init.php');

$nosotros=new NosotrosController();
$nosotros->render();*/

class NosotrosController extends Controlador{

	/*====================================================
	index: Procesa la solicitud de la página Nosotros.html 	
	*====================================================*/
	function render(){				
		require_once('../vistas/theme1/nosotros_view.php');
		$pagina= new Layout();
		$vista=new NosotrosView();
		$pagina->setSeccion('contenido',$vista);
		
		$pagina->render();
	}
}
?>