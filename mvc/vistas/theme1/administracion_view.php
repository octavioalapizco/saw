<?php 
class AdministracionView extends Vista{
	var $nombre="Administracion";
	function render(){		
		include('administracion/administracion.html.php');
	}
	
}

?>