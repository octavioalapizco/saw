<?php 
require_once('../mvc.php');	

$monitoreo=new MonitoreoController();

if ( isset($_REQUEST['accion']) ){
	
	switch($_REQUEST['accion']){
		case 'getDispositivos':
		$monitoreo->getDispositivos();
		break;
		case 'getHorarios':
			$monitoreo->getHorarios();
		break;
	}
	
	
}else{
	$monitoreo->render();
}  




class MonitoreoController{
	
	function render(){
		require_once('../vistas/theme1/monitoreo_view.php');
		$tema= new Theme();
		$vista=new MonitoreoView();
		$tema->setVista($vista);
		$footer=new Vista();
		$tema->setFooter($footer);	
		$tema->render();
	}
	
	/*  Devuelve el estado de todos los aparatos, para ser usada con ajax */
	function getDispositivos(){
		$data=array(
			array('idDispotitivo'=>1,'tipo'=>'AA','nombre'=>'Aula 1'),
			array('idDispotitivo'=>2,'tipo'=>'AA','nombre'=>'Aula 2'),
			array('idDispotitivo'=>3,'tipo'=>'AA','nombre'=>'Aula 3'),
			array('idDispotitivo'=>4,'tipo'=>'AA','nombre'=>'Aula 4'),
			array('idDispotitivo'=>5,'tipo'=>'AA','nombre'=>'Aula 5'),
			array('idDispotitivo'=>6,'tipo'=>'AA','nombre'=>'Aula 6'),
			array('idDispotitivo'=>7,'tipo'=>'AA','nombre'=>'Aula 7'),
			array('idDispotitivo'=>8,'tipo'=>'AA','nombre'=>'Aula 8'),
			array('idDispotitivo'=>9,'tipo'=>'AA','nombre'=>'Aula 9'),
			array('idDispotitivo'=>10,'tipo'=>'AA','nombre'=>'Aula 10'),
			array('idDispotitivo'=>11,'tipo'=>'AA','nombre'=>'Aula 11'),
			array('idDispotitivo'=>12,'tipo'=>'AA','nombre'=>'Aula 12'),
			array('idDispotitivo'=>13,'tipo'=>'AA','nombre'=>'Aula 13'),
			array('idDispotitivo'=>14,'tipo'=>'AA','nombre'=>'Aula 14'),
			array('idDispotitivo'=>15,'tipo'=>'AA','nombre'=>'Aula 15'),
			
		);
		$dispositivos=array(
			'data'=>$data,
			'success'=>true
		);
		echo json_encode( $dispositivos );
	}
	
	function getHorarios(){
		$data=array(
			array('idHorario'=>1,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>2,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>3,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>4,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>5,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>6,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>7,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>8,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>9,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>10,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>11,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>12,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>13,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>14,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>15,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>16,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			array('idHorario'=>17,'horaInicio'=>'7:00 AM','horaFin'=>'9:00 AM','evento'=>'encender'),
			
			
		);
		$dispositivos=array(
			'data'=>$data,
			'success'=>true
		);
		echo json_encode( $dispositivos );
	}
	/* Este hará un redirect al controlador de administracion */
	function configurarAula($aulaId){
	
	}
	
	/* Para ser usado con ajax  */
	function encenderAparato($aparatoId){
	
	}
	
	/* Para ser usado con ajax  */
	function apagarAparato($aparatoId){
	
	}
}

?>