<?php
require_once('../mvc.php');

$home=new HomeController();
$home->index();


class HomeController{
	function index(){
		require_once('../vistas/theme1/home_view.php');
		$tema= new Theme();
		$vista=new HomeView();
		$tema->setVista($vista);
		$footer=new Vista();
		$tema->setFooter($footer);
		$tema->render();
	}
}
?>