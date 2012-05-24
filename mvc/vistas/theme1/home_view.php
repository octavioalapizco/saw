<?php 

class HomeView extends Vista{
	var $nombre="Home";
	function render(){
		include ('home/home.html.php');
	}
	
}

?>