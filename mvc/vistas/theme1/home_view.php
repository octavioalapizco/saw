<?php 


class HomeView extends Vista{
	var $nombre="Home";
	function render(){		
		?>
		<link rel="stylesheet" href="css/theme1/blog.css" type="text/css" />
		<style type="text/css">
			.body{
				margin-top:-4px;
				
			}
			
			
			.body div#featured h3{
				padding:25px 0 0;
				width:auto;
				margin-left:51px;
			}
			.body div#featured p{
				width:350px;
				margin-left:75px;
			}
			.footer p {
				/*position:absolute;
				bottom:0px;
				right:57px;*/
				font-size:14px;
				margin:6px 0 0 227px;
			}
			.footer {
				padding:65px 10px 0;
				margin-top:20px;
			}
			.footer ul li a{
				font-weight:normal;
				font-size:14px;
			}
		</style>
		
		
		<div style="float:right;margin-right:20px;margin-top:15px;">			
			<h3 style="">Sistemas Automatizados Web</h3>			
			<p style="margin-top:30px;">Una forma pr&aacute;ctica y sencilla de controlar todos sus dispositivos el&eacute;ctricos y electr&oacute;nicos por medio de un sistema web.</p>
		</div>
		<?php 
	}
	
}

?>