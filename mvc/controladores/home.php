<?php
require_once('../mvc.php');

$home=new HomeController();
$home->render();

class HomeController{

	/*====================================================
	index: Procesa la solicitud de la página Index.html 	
	*====================================================*/
	function render(){		
		require_once('../vistas/theme1/home_view.php');
		$tema= new Theme();			//Layout
		$vista=new HomeView();
		$tema->setVista($vista);
		$footer=new Vista();
		$tema->setFooter($footer);
		$tema->render();
	}
	
}
?>