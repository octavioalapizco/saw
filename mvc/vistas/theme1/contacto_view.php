<?php 

class ContactoView extends Vista{
	var $nombre="Contacto";
	function render($rutaContenido=null){
		include ('contacto/contacto.html.php');
	}
	
}

?>