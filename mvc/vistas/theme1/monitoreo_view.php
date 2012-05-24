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
		include '../vistas/theme1/monitoreo/monitoreo_main.php';
	}	
}



?>