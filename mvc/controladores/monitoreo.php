<?php 
require_once('../mvc.php');	
require_once('../vistas/theme1/monitoreo_view.php');

$monitoreo=new MonitoreoController();
$monitoreo->mostrarPantalla();

class MonitoreoController{
	
	function mostrarPantalla(){
		$tema= new Theme();
		$vista=new MonitoreoView();
		$tema->setVista($vista);
		$footer=new Vista();
		$tema->setFooter($footer);		
		$tema->render();
	}
	
	/*  Devuelve el estado de todos los aparatos, para ser usada con ajax */
	function getEstadoDeAparatos(){
	
	}
	
	/* Este hará un redirect al controlador de administracion */
	function configurarAula($aulaId){
	
	}
	
	/* Para ser usado con ajax  */
	function encenderAparato($aparatoId){
	
	}
	
	/* Para ser usado con ajax  */
	function apagarAparato($aparatoId){
	
	}
}
?>