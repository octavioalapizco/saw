<?php
require_once('../mvc.php');

$login=new LoginController();


if ( isset($_REQUEST['accion']) ){	
	switch($_REQUEST['accion']){
		case 'login':			
			$login->render();
			break;		
	}
}else{
	$login->render();
} 

class LoginController{

	function render(){		
		require_once('../vistas/theme1/login_view.php');
		$tema= new Theme();			//Layout
		$vista=new LoginView();
		$tema->setVista($vista);
		$footer=new Vista();
		$tema->setFooter($footer);
		$tema->render();
	}
	
	function login(){
		//logear usuario
		
	}
	
}
?>