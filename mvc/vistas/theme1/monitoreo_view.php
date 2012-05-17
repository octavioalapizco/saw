<?php 
class MonitoreoView extends Vista{
	var $nombre="Monitoreo";
	#================================================================================================================================================================
	#	imprime_monitor_aire:
	#================================================================================================================================================================
	function imprime_monitor_aire($num_aula){
	?>
		<div class="tarjeta_monitoreo">
			<div style="height:20px;">
				
			</div>
			<!--div style="float:left;position:absolute;top:0px;">ASD</div-->			
			<a href="#" ><img width="258px;" src="imagenes/theme1/frente-grandes.png" alt="" title="configurar"/></a>												
			<div style="height:30px;">
				
			</div>
			<div  style="color:#5D5D5D;padding:0;width:80px;height:auto !important;float:left;margin-left:5px;text-align:center;"><input type="button" value="Encender"></div>
			<div style="color:#5D5D5D;padding:0;width:300px;height:auto !important;position:absolute;">Apagado</div>
			<div style="color:#5D5D5D;padding:0;width:80px; height:auto !important;float:right;margin-right:5px;text-align:center;"><input type="button" value="Apagar"></div>
			<div style="clear:both;height:20px;">
				
			</div>
			<div style="color:#5D5D5D;padding:0;width:300px;height:auto !important;clear:both;text-align:center; "><input type="button" value="Configurar"></div>
			<!--a href="#">Click to read more</a-->
		</div>
	<?php
	}
	#================================================================================================================================================================
	#	render:
	#================================================================================================================================================================	
	function render(){
		?>
		<style type="text/css">
			#featured{
				background:none !important;
				height:320px !important;
				padding-top:41px !important;
			}
			.tarjeta_monitoreo{
				
			}
			
		</style>
		<link rel="stylesheet" href="css/theme1/monitoreo.css" type="text/css" />
		<ul class="monitoreo" style="background:none;display:inline;">
		
			<li style="">							
				<?php $this->imprime_monitor_aire($num_aire=5); ?>;
			</li>
			
		</ul>
		<div>
			<div style="margin-left:40px;float:left;">	
				<!-- ============================================================================================== -->
				<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.hovertable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
}
table.hovertable th {
	background-color:#c3dde0;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.hovertable tr {
	background-color:#d4e3e5;
}
table.hovertable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
</style>

<!-- Table goes in the document BODY -->
<table class="hovertable">
<tr>
	<th>Nombre del dispositivo</th><th>Info Header 2</th><th>Info Header 3</th>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
	<td>Item 1A</td><td>Item 1B</td><td>Item 1C</td>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
	<td>Item 2A</td><td>Item 2B</td><td>Item 2C</td>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
	<td>Item 3A</td><td>Item 3B</td><td>Item 3C</td>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
	<td>Item 4A</td><td>Item 4B</td><td>Item 4C</td>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
	<td>Item 5A</td><td>Item 5B</td><td>Item 5C</td>
</tr>
</table>

				<!-- ============================================================================================== -->
				<table class="">
					<tr><th colspan="2">Dispositivos</th></tr>
					<tr>
						<th>Nombre</th>
						<th>Estado</th>
						<th>Imagen</th>
					</tr>
					<tr>
						<td>Aula 1</td><td>apagado</td><td><img src="asd" ></td>
					</tr>
					<tr>
						<td>Aula 2</td><td>apagado</td><td><img src="asd" ></td>
					</tr>
					<tr>
						<td>Aula 3</td><td>apagado</td><td><img src="asd" ></td>
					</tr>
					<tr>
						<td>Aula 4</td><td>apagado</td><td><img src="asd" ></td>
					</tr>
					
				</table>
			</div>
			<div style="clear:both;"></div>
		</div>
		<?php 
	}	
}



?>