<?php ?>
<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/ext-all.css"/>
<!--

<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/xtheme-access.css"/>
-->
<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/xtheme-gray.css"/>
<script type="text/javascript" src="js/ext-3.4.0/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="js/ext-3.4.0/ext-all-debug.js"></script>

<script type="text/javascript" src="js/pagina_monitoreo/dispositivos/gridMonitoreoDispositivos.ui.js"></script>
<script type="text/javascript" src="js/pagina_monitoreo/dispositivos/gridMonitoreoDispositivos.js"></script>
<script type="text/javascript" src="js/pagina_monitoreo/dispositivos/stoMonitoreoDispositivos.js"></script>

<script type="text/javascript" src="js/pagina_monitoreo/horarios/gridMonitoreoHorarios.ui.js"></script>
<script type="text/javascript" src="js/pagina_monitoreo/horarios/gridMonitoreoHorarios.js"></script>
<script type="text/javascript" src="js/pagina_monitoreo/horarios/stoMonitoreoHorarios.js"></script>

<link rel="stylesheet" href="css/theme1/monitoreo.css" type="text/css" />
<style type="text/css">
#featured{	
	height:320px !important;
	padding-top:41px !important;
}
.tarjeta_monitoreo{
	
}	
.body ul li{
	padding:0;
}/*
.footer{
	margin-left:-10px;
}
.footer p {		
		font-size:14px;
		margin:5px 0 0 227px;
	}*/
</style>
<script>

Ext.onReady(function() {
    Ext.QuickTips.init();
    var cmp1 = new gridMonitoreoDispositivos({
        renderTo: 'gridMonitoreoDispositivos'		
    });
	
	
	
    //cmp1.show();
	
	var cmp2 = new gridMonitoreoHorarios({
        renderTo: 'gridMonitoreoHorarios'
    });
	//cmp2.show();
	
	cmp1.getSelectionModel().on('rowselect',function(selectionModel , rowIndex, r){
		var dspName=this.lblNombreDispositivo;
		if (this.lblNombreDispositivo== undefined){
			dspName=Ext.select('.lblNombreDispositivo');						
			this.lblNombreDispositivo=dspName;
		}
		
		if (dspName != undefined && dspName.elements != undefined && dspName.elements[0] != undefined){
			 this.lblNombreDispositivo.elements[0].textContent=r.data.nombre;
		}				
	},cmp1);
	
	cmp1.bottomToolbar.doRefresh();
	cmp2.bottomToolbar.doRefresh();
	
	//rowselect 
});

</script>

<!--===============================================================================================================================
	Al Body
    ===============================================================================================================================!-->
<div class="pagina_monitoreo" style='margin-top:29px;position:absolute;'>
	<div style="float:left;margin-top:-20px;">
		<h2>Dispositivos:</h2>
		<div id="gridMonitoreoDispositivos"></div>
	</div>

	<div style="display:inline;margin-top:-25px;possition:absolute;">
	<ul class="monitoreo" style="background:none;display:inline;margin-top:-25px;possition:absolute;">
		<li style="">							
			<?php $this->render_tarjeta_de_dispositivo($num_aire=5); ?>
		</li>	
	</ul>
	</div>

	<div style="float:left;width:320px;margin-top:-20px;">	
		<h1>Horarios del dia:</h1>
		<div id="gridMonitoreoHorarios"></div>
	</div>

	<div style="clear:both;"></div>
</div>