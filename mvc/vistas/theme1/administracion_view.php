<?php 
class AdministracionView extends Vista{
	var $nombre="Administracion";
	function render(){		
		?>
		<style type="text/css">
			#featured{
				background:none !important;
				height:auto !important;
			}
		</style>
		<h3>Administracion</h3>
		<p>Aqui veremos la configuracion de dispositivos, usuarios y monitoreo.</p>
		<?php 
	}
	
}

?>