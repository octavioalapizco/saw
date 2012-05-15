<?php
require_once('../mvc.php');

require_once('../vistas/theme1/home_view.php');

$home=new HomeController();
$home->index();
class HomeController{
	function index(){	
		$tema= new Theme();
		$vista=new HomeView();
		$tema->setVista($vista);
		$tema->render();
	}
}
?>