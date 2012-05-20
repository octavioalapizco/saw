<?php 
class NosotrosView extends Vista{

	var $nombre="Nosotros";
	
	function render(){		
		include('nosotros/nosotros.html.php');
	}
	
}

?>