
<style type="text/css">
	#featured{
		background:none !important;
		height:320px !important;
		padding-top:41px !important;
	}
	.tarjeta_monitoreo{
		
	}
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
<link rel="stylesheet" href="js/jqwidgets/styles/jqx.base.css" type="text/css" />
<script type="text/javascript" src="js/scripts/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="js/jqwidgets/jqxdata.js"></script>
<script type="text/javascript" src="js/jqwidgets/jqxbuttons.js"></script>
<script type="text/javascript" src="js/jqwidgets/jqxscrollbar.js"></script>
<script type="text/javascript" src="js/jqwidgets/jqxmenu.js"></script>
<script type="text/javascript" src="js/jqwidgets/jqxlistbox.js"></script>
<script type="text/javascript" src="js/jqwidgets/jqxdropdownlist.js"></script>
<script type="text/javascript" src="js/jqwidgets/jqxgrid.js"></script>
<script type="text/javascript" src="js/jqwidgets/jqxgrid.selection.js"></script> 
<script type="text/javascript" src="js/jqwidgets/jqxgrid.columnsresize.js"></script> 
<script type="text/javascript" src="js/jqwidgets/jqxgrid.filter.js"></script> 
<script type="text/javascript" src="js/jqwidgets/jqxgrid.sort.js"></script> 
<script type="text/javascript" src="js/jqwidgets/jqxgrid.pager.js"></script> 
<script type="text/javascript" src="js/jqwidgets/jqxgrid.grouping.js"></script>
<link rel="stylesheet" href="css/theme1/monitoreo.css" type="text/css" />
<script type="text/javascript">
	$(document).ready(function () {
		// prepare the data		
		var row = {}, data=new Array();
		row['nombre']='Aula1';
		row['estado']='apagado';
		row['imagen']='NA';
		row['tipo']='AA';	
		data.push(row);		
		row = {}
		row['nombre']='Aula2';
		row['estado']='apagado';
		row['imagen']='NA';
		row['tipo']='AA';
		data.push(row);		
		row = {}
		row['nombre']='Aula3';
		row['estado']='apagado';
		row['imagen']='NA';
		row['tipo']='AA';
		data.push(row);		
		row = {}
		row['nombre']='Aula4';
		row['estado']='apagado';
		row['imagen']='NA';
		row['tipo']='AA';
		data.push(row);		
		var source =
		{
			localdata: data,
			datatype: "array"
		};
		var dataAdapter = new $.jqx.dataAdapter(source, {
			loadComplete: function (data) { }
		});
		$("#jqxgrid").jqxGrid(
		{
			width: 550,
			height: 290,
			source: dataAdapter,
			columns: [
			  { text: 'Nombre', 		     datafield: 'nombre', width: 120 },
			  { text: 'Estado', 	         datafield: 'estado', width: 100 },
			  { text: 'Imagen', 			 datafield: 'imagen', width: 150 },
			  { text: 'Tipo de dispositivo', datafield: 'tipo',   width: 180 }
			]
		});
	
		$("#jqxgrid").bind('rowselect', function (event,b,c) {		
			var selectedRowIndex = event.args.rowindex;
			console.log(event);
			var columntext = $("#jqxgrid").jqxGrid('getcolumn', 'estado').nombre;
			alert(columntext);
			var details = $('#grid').jqxGrid('getrowdetails', 1);
			console.log(details);
		});
	});
</script>

<ul class="monitoreo" style="background:none;display:inline;">
	<li style="">							
		<?php $this->imprime_monitor_aire($num_aire=5); ?>
	</li>
</ul>

<div style="margin-left:40px;float:left;">			
	<!-- ============================================================================================== -->
	<div id="jqxgrid">
	</div>
	<!-- ============================================================================================== -->
	
</div>
<div style="clear:both;"></div>
