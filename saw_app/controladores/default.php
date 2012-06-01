<?php
class DefaultController extends Controlador{
	
	function nosotros(){			
		require_once('../saw_app/vistas/nosotros_view.php');		
		$this->renderVista(
			new NosotrosView()
		);		
	}
			
	function home($rutaContenido=null ){		
		require_once('../saw_app/vistas/home_view.php');
		$this->renderVista(
			new HomeView()
		);				
	}
	
	function contacto(){					
		require_once('../saw_app/vistas/contacto_view.php');
		$this->renderVista(
			new ContactoView()
		);					
	}
	
	function renderVista($vista){
		$pagina= new Layout();
		$pagina->setSeccion('contenido',$vista);		
		$pagina->render();
	}
}
?>