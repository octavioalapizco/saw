<?php
require_once('../mvc.php');	

$nosotros=new NosotrosController();
$nosotros->index();

class NosotrosController{
	function index(){	
		require_once('../vistas/theme1/nosotros_view.php');
		$tema= new Theme();
		$vista=new NosotrosView();
		$tema->setVista($vista);
		$tema->render();
	}
}
?>