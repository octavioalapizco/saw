<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/ext-all.css"/>
<!--

<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/xtheme-access.css"/>
-->
<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/xtheme-gray.css"/>
<script type="text/javascript" src="js/ext-3.4.0/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="js/ext-3.4.0/ext-all-debug.js"></script>

<script type="text/javascript" src="js/administracion/frmHorarios/stoDias.js"></script>
<script type="text/javascript" src="js/administracion/frmHorarios/stoDispositivos.js"></script>
<script type="text/javascript" src="js/administracion/frmHorarios/stoHorarios.js"></script>

<script type="text/javascript" src="js/administracion/frmHorarios/frmAdminHorarios.ui.js"></script>
<script type="text/javascript" src="js/administracion/frmHorarios/frmAdminHorarios.js"></script>

<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/administracion.css"/>
<!--link rel="stylesheet" href="css/theme1/monitoreo.css" type="text/css" / .body ul li -->

<link rel="stylesheet" type="text/css" href="css/administracion.css"/>


<script>

Ext.onReady(function() {
	
    Ext.QuickTips.init();
    Ext.onReady(function() {
    Ext.QuickTips.init();		
	
		new frmAdminHorarios({renderTo:'panelAdministracion'});
		/*card = new Ext.Panel({
			layout:'card',
			activeItem: 0,
			width:800,
			height:800,
			forceLayout:true,
			renderTo:'panelAdministracion',
			items:[
				new frmAdminHorarios(),
				{xtype:'panel',title:'otra Cosa'}
			]
		});*/
	});
	
	
});

</script>
<div class="invertedshiftdown" style="position:absolute;left:50%;margin-left:-185px;">
<ul>
	<li class="current"><a href="#">Horarios</a></li>
	<li><a href="#">Usuarios</a></li>
	<li><a href="#">Dispositivos</a></li>
	
</ul>
</div>	
<!-- http://bavotasan.com/2011/style-select-box-using-only-css/
<div class="styled-select">
<select>
<option>Here is the first option</option>
<option>The second option</option>
</select>
</div>-->
<div id="panelAdministracion" style="margin-top:30px;position:absolute;left:50%;margin-left:-290px;"></div>