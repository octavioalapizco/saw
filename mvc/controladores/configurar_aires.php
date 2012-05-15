<?php
require_once('../mvc.php');	
require_once('../vistas/theme1/administracion_view.php');
$conf=new ConfigurarAires();
$conf->mostrarHorarios(1,1);
class ConfigurarAires{


	function seleccionarAula($aulaId){
		
	}
	
	function seleccionarDia($dia){
	
	}

	function mostrarHorarios($aula, $dia, $start=0, $limit=20){
		$tema= new Theme();
		$vista=new AdministracionView();
		$tema->setVista($vista);
		$tema->render();
		return true;
		/*
		$model=new ConfigurarAiresModel();
		$horarios=$model->getHorarios($aula, $dia, $start=0, $limit=20);
		*/
		
		//--------------------------------------------------------------------------------------------
		//		EJEMPLO DE USO DE PDO.
		$sql = 'SELECT id,aula,id_dia,id_horainicio,id_horafinal,status,activo FROM horarios
		WHERE aula=:aula AND id_dia=:id_dia';
		$sth = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		$sth->execute(array(':aula' => $aula, ':id_dia' => $dia));
		$red = $sth->fetchAll(PDO::FETCH_ASSOC);
		
		//--------------------------------------------------------------------------------------------
		echo "<pre>";
		print_r($red);
		echo "</pre>";
	}	
	
	/* Crear y actualizar */
	function guardarHorario($params){	
	
	}
	
	function eliminarHorario($idHorario){
	
	}

	
}
?>
