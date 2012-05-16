<?php 
class MonitoreoView extends Vista{
	var $nombre="Monitoreo";
	#================================================================================================================================================================
	#	imprime_monitor_aire:
	#================================================================================================================================================================
	function imprime_monitor_aire($num_aula){
	?>
		
		<div class="tarjeta_monitoreo">			
			<div>
				Dispositivo: 	
				<select> 
					<option value="1">Aula 1</option>
					<option value="2">Aula 2</option>
					<option value="3">Aula 3</option>
					<option value="4">Aula 4</option>					
				</select>
			</div>
			<!--div style="float:left;position:absolute;top:0px;">ASD</div-->			
			<a href="#"><img width="258px;" src="imagenes/theme1/acondicionado.jpg" alt="" title="configurar"/></a>												
			<div  style="color:#5D5D5D;padding:0;width:80px;height:auto !important;float:left;margin-left:5px;"><input type="button" value="Encender"></div>
			<div style="color:#5D5D5D;padding:0;width:300px;height:auto !important;position:absolute;">Apagado</div>
			<div style="color:#5D5D5D;padding:0;width:80px; height:auto !important;float:right;margin-right:5px;"><input type="button" value="Apagar"></div>
			<div style="color:#5D5D5D;padding:0;            height:auto !important;clear:both;text-align:center; "><input type="button" value="Configurar"></div>
			
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
				height:auto !important;
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
				<div class="dias">
					<select>
						<option value="1">Lunes</li>
						<option value="2">Martes</li>
						<option value="3">Miercoles</li>
						<option value="4">Jueves</li>
						<option value="5">Viernes</li>
						<option value="6">Sabado</li>
						<option value="7">Domingo</li>
					</select>
				</div>
				<table >
					<tr>
					<th>Hora Inicio</th>
					<th>Hora Fin</th>
					<th>Accion</th>
					</tr>
					<tr>
						<td>7:00 am</td><td>9:00 am</td><td>Encendido</td>
					</tr>
					<tr>
						<td>9:00 am</td><td>9:30 am</td><td>Apagado</td>
					</tr>
				</table>
			</div>
			<div style="clear:both;">
		<div>
		<?php 
	}
	
}



?>