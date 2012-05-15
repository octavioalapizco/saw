<?php 
class MonitoreoView extends Vista{
	var $nombre="Monitoreo";
	function render(){		
		?>
		<style type="text/css">
			#featured{
				background:none !important;
				height:auto !important;
			}
		</style>
		<link rel="stylesheet" href="css/theme1/monitoreo.css" type="text/css" />
		<ul class="monitoreo" style="background:none;">
			<li style="">
				<div>
					<a href="#"><img width="258px;" src="imagenes/theme1/acondicionado.jpg" alt="" title="configurar"/></a>
					
					
					<div style="color:#5D5D5D;padding:0;width:80px;height:auto !important;float:left;"><input type="button" value="Encender"></div>
					<div style="color:#5D5D5D;padding:0;width:80px;height:auto !important;float:right;"><input type="button" value="Apagar"></div>
					<div style="color:#5D5D5D;padding:0;text-align:center; height:auto !important;clear:both;"><input type="button" value="Configurar"></div>
					
					<!--a href="#">Click to read more</a-->
				</div>
			</li>
			<li>
				<div>
					<a href="#"><img width="258px;" src="imagenes/theme1/acondicionado.jpg" alt="" title="configurar"/></a>
					<div style="color:#5D5D5D;padding:0;width:80px;height:auto !important;float:left;"><input type="button" value="Encender"></div>
					<div style="color:#5D5D5D;padding:0;width:80px;height:auto !important;float:right;"><input type="button" value="Apagar"></div>
					<div style="color:#5D5D5D;padding:0;text-align:center; height:auto !important;clear:both;"><input type="button" value="Configurar"></div>
					<!--a href="#">Click to read more</a-->
				</div>
			</li>
			<li style="clear:both;">
				<div>
					<a href="#"><img width="258px;" src="imagenes/theme1/acondicionado.jpg" alt="" title="configurar"/></a>
					<div style="color:#5D5D5D;padding:0;width:80px;height:auto !important;float:left;"><input type="button" value="Encender"></div>
					<div style="color:#5D5D5D;padding:0;width:80px;height:auto !important;float:right;"><input type="button" value="Apagar"></div>
					<div style="color:#5D5D5D;padding:0;text-align:center; height:auto !important;clear:both;"><input type="button" value="Configurar"></div>
					<!--a href="#">Click to read more</a-->
				</div>
			</li>
			<li>
				<div>
					<a href="#"><img width="258px;" src="imagenes/theme1/acondicionado.jpg" alt="" title="configurar"/></a>
					<div style="color:#5D5D5D;padding:0;width:80px;height:auto !important;float:left;"><input type="button" value="Encender"></div>
					<div style="color:#5D5D5D;padding:0;width:80px;height:auto !important;float:right;"><input type="button" value="Apagar"></div>
					<div style="color:#5D5D5D;padding:0;text-align:center; height:auto !important;clear:both;"><input type="button" value="Configurar"></div>
					<!--a href="#">Click to read more</a-->
				</div>
			</li>
		</ul>
		<?php 
	}
	
}



?>