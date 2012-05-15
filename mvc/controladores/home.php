<?php
require_once('../mvc.php');
require_once('../vistas/theme1/home.php');

$home=new HomeController();
$home->index();
class HomeController{
	function index(){
		$layout= new HomeView();
		$layout->render();
	}
}
?>