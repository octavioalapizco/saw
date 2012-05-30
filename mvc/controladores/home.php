<?php
class HomeController extends Controlador{

	/*====================================================
	index: Procesa la solicitud de la página Index.html 	
	*====================================================*/
	function render($rutaContenido=null ){		
		require_once(RUTA_MVC.'vistas/theme1/home_view.php');
		$pagina= new Layout();			//Layout
		$vista=new HomeView();
		$pagina->setSeccion('contenido',$vista);
		//$footer=new Vista();
		//$tema->setFooter($footer);
		$pagina->render();
	}
	
}
?>