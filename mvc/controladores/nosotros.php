<?php
require_once('../mvc.php');	
require_once('../vistas/theme1/nosotros_view.php');

$nosotros=new NosotrosController();
$nosotros->index();
class NosotrosController{
	function index(){	
		$tema= new Theme();
		$vista=new NosotrosView();
		$tema->setVista($vista);
		$tema->render();
	}
}
?>