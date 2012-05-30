<?php 
class NosotrosView extends Vista{

	var $nombre="Nosotros";
	
	function render($rutaContenido=null){		
		include('nosotros/nosotros.html.php'); //hola
	}
	
}

?>