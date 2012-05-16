<?php 
class NosotrosView extends Vista{
	var $nombre="Nosotros";
	function render(){		
		?>
		<style type="text/css">
			#featured{
				background:none !important;
				height:320px !important;
				padding-top:41px !important;
			}
			div.imagen{
				
				display:inline;
				float:left;
				
			}
			.body div#featured h3{
				padding:0 !important;

			}
		</style>
		<link rel="stylesheet" href="css/theme1/blog.css" type="text/css" />
		<div class="imagen"><img src="imagenes/theme1/team2.png" ></div>
		<div style="float:left;margin-left:100px">
			<h3 style="">Nosotros</h3>
			<p>Aqui la informaci&oacute;n del equipo.</p>
		</div>
		<?php 
	}
	
}

?>