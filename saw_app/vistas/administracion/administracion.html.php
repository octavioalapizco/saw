<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/ext-all.css"/>
<!--

<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/xtheme-access.css"/>
-->
<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/xtheme-gray.css"/>
<script type="text/javascript" src="js/ext-3.4.0/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="js/ext-3.4.0/ext-all-debug.js"></script>

<script type="text/javascript" src="js/administracion/frmHorarios/frmAdminHorarios.ui.js"></script>
<script type="text/javascript" src="js/administracion/frmHorarios/frmAdminHorarios.js"></script>
<script type="text/javascript" src="js/pagina_monitoreo/horarios/gridMonitoreoHorarios.ui.js"></script>
<script type="text/javascript" src="js/pagina_monitoreo/horarios/gridMonitoreoHorarios.js"></script>
<script type="text/javascript" src="js/pagina_monitoreo/horarios/stoMonitoreoHorarios.js"></script>


<!--link rel="stylesheet" href="css/theme1/monitoreo.css" type="text/css" / .body ul li -->

<style type="text/css">
	.body ul li{
		padding:0;
	}
	
	<!-- http://www.dynamicdrive.com/style/csslibrary/item/inverted-shift-down-menu/ -->
	.invertedshiftdown ul{
padding: 0;
width: 100%;
border-top: 5px solid #D10000; /*Red color theme*/
background: transparent;
voice-family: "\"}\"";
voice-family: inherit;
}

	.invertedshiftdown ul{
margin:0;
margin-left: 40px; /*margin between first menu item and left browser edge*/
padding: 0;
list-style: none;
}

.invertedshiftdown li{
display: inline;
margin: 0 2px 0 0;
padding: 0;
text-transform:uppercase;
}

.invertedshiftdown a{
float: left;
display: block;
font: bold 12px Arial;
color: black;
text-decoration: none;
margin: 0 1px 0 0; /*Margin between each menu item*/
padding: 5px 10px 9px 10px; /*Padding within each menu item*/
background-color: white; /*Default menu color*/

/*BELOW 4 LINES add rounded bottom corners to each menu item.
  ONLY WORKS IN FIREFOX AND FUTURE CSS3 CAPABLE BROWSERS
  REMOVE IF DESIRED*/
-moz-border-radius-bottomleft: 5px;
border-bottom-left-radius: 5px;
-moz-border-radius-bottomright: 5px;
border-bottom-right-radius: 5px;
}

.invertedshiftdown a:hover{
background-color: #D10000; /*Red color theme*/
padding-top: 9px; /*Flip default padding-top value with padding-bottom */
padding-bottom: 5px; /*Flip default padding-bottom value with padding-top*/
color: white;
}

.invertedshiftdown .current a{ /** currently selected menu item **/
background-color: #D10000; /*Red color theme*/
padding-top: 9px; /*Flip default padding-top value with padding-bottom */
padding-bottom: 5px; /*Flip default padding-bottom value with padding-top*/
color: white;
}

#myform{ /*CSS for sample search box. Remove if desired */
float: right;
margin: 0;
margin-top: 2px;
padding: 0;
}

#myform .textinput{
width: 190px;
border: 1px solid gray;
}

#myform .submit{
font: normal 12px Verdana;
height: 22px;
border: 1px solid #D10000;
background-color: black;
color: white;
}

.styled-select select {
   background: transparent;
   width: 268px;
   padding: 5px;
   font-size: 16px;
   border: 1px solid #ccc;
   height: 34px;
}
</style>


<script>

Ext.onReady(function() {
	
    Ext.QuickTips.init();
    Ext.onReady(function() {
    Ext.QuickTips.init();		
		
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
<div id="panelAdministracion" style="margin-top:60px;position:absolute;left:50%;margin-left:-175px;"></div>