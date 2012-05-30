<?php 

class HomeView extends Vista{
	var $nombre="Home";
	var $styleSheets;
	function HomeView(){
		parent::__construct();
		$this->styleSheets=array(
			'<link rel="stylesheet" href="css/theme1/blog.css" type="text/css" />'
		);		
	}

		
	function render($rutaContenido=null){
		include ('home/home.html.php');
	}
	
}

?>