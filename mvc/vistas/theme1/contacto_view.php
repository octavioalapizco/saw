<?php 

class ContactoView extends Vista{
	var $nombre="Contacto";
	function render(){
		include ('contacto/contacto.html.php');
	}
	
}

?>