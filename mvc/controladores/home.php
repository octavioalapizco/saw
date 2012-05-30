<?php
require_once('../core/init.php');

$home=new HomeController();
$home->render();

class HomeController{

	/*====================================================
	index: Procesa la solicitud de la página Index.html 	
	*====================================================*/
	function render($rutaContenido=null ){		
		require_once('../vistas/theme1/home_view.php');
		$pagina= new Layout();			//Layout
		$vista=new HomeView();
		$pagina->setSeccion('contenido',$vista);
		//$footer=new Vista();
		//$tema->setFooter($footer);
		$pagina->render();
	}
	
}
?>