<?php 
class Theme extends Vista{
	
	function renderVista(){
		if ( isset($this->vista)){
			$this->vista->render();
		}
	}
	
	function setFooter($footer){
		$this->footer=$footer;
	}
	
	function renderFooter(){
		if ( isset($this->footer)){
			$this->footer->render();
		}else{
			$this->renderDefaultFooter();
		}
	}
	
	function getMenuState($menu){
		if ( isset($this->vista)){
			if ($this->vista->nombre == $menu){
				return "selected";
			}
		}
	}
	
	function renderDefaultFooter(){
		?>
		<ul class="blog">
			<li>
				<div>
					<a href="#"><img src="imagenes/theme1/pastries.jpg" alt=""/></a>
					<p>This website template has been designed by Free Website Templates for you, for free. 
					You can replace all this text with your own text.</p>
					<a href="#">Click to read more</a>
				</div>
			</li>
			<li>
				<div>
					<a href="#"><img src="imagenes/theme1/fruits.jpg" alt=""/></a>
					<p>This website template has been designed by Free Website Templates for you, for free. 
					You can replace all this text with your own text.</p>
					<a href="#">Click to read more</a>
				</div>
			</li>
			<li>
				<div>
					<a href="#"><img src="imagenes/theme1/cosmetics.jpg" alt=""/></a>
					<p>This website template has been designed by Free Website Templates for you, for free. 
					You can replace all this text with your own text.</p>
					<a href="#">Click to read more</a>
				</div>
			</li>
		</ul>
		<?php
	}
	function render(){
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>SAW</title>
		<link rel="stylesheet" href="css/theme1/style_monitoreo.css" type="text/css" />
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/ie7.css" type="text/css" />
		<![endif]-->
	</head>
	<body>
		<div class="page">
			<div class="header">
				<a href="index.html" id="logo"><img src="imagenes/saw_logo.png" alt=""/></a>
				<ul>
					<li class="<?php echo $this->getMenuState('Home'); 			?>"><a href="index.html"		 >Home</a></li>
					<li class="<?php echo $this->getMenuState('Nosotros'); 		?>"><a href="nosotros.html"		 >Nosotros</a></li>
					<li class="<?php echo $this->getMenuState('Monitoreo'); 	?>"><a href="monitoreo.html"	 >Monitoreo</a></li>
					<li class="<?php echo $this->getMenuState('Administracion');?>"><a href="administracion.html">Administraci&oacute;n</a></li>
				</ul>
			</div>
			<div class="separator"></div>
			
			<div class="body">
				<div id="featured">
					<?php $this->renderVista(); ?>					
					
				</div>
				
				<?php 
					/* IMPRIME ESTE BLOQUE DE CODIGO */
					$this->renderFooter(); 				
				?>	
			</div>
			<div class="footer">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="nosotros.html">Nosotros</a></li>
					<li><a href="monitoreo.html">Monitoreo</a></li>
					<li><a href="administracion.html">Administracion</a></li>
				</ul>
				<p>&#169; Copyright &#169; 2011. Company name all rights reserved</p>
				<!--div class="connect">
					<a href="http://facebook.com/freewebsitetemplates" id="facebook">facebook</a>
					<a href="http://twitter.com/fwtemplates" id="twitter">twitter</a>
					<a href="http://www.youtube.com/fwtemplates" id="vimeo">vimeo</a>
				</div-->
			</div>
		</div>
	</body>
</html>  
<?php	
	}
}

?>