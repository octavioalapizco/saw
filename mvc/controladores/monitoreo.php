<?php 
require_once('../core/init.php');

if(!isset($_SESSION['username']))
{
		require_once('../vistas/theme1/login_view.php');
		$tema= new Layout();			//Layout
		$vista=new LoginView();
		$tema->setSeccion('contenido',$vista);

		$tema->render();
		exit();
}
$monitoreo=new MonitoreoController();



if ( isset($_REQUEST['accion']) ){
	
	switch($_REQUEST['accion']){
		case 'getDispositivos':
			$monitoreo->getDispositivos();
			break;
		case 'getHorarios':
			$monitoreo->getHorarios();
			break;
		case 'encenderDispositivo':
			$monitoreo->encenderDispositivo();
			break;
		case 'apagarDispositivo':
			
			$monitoreo->apagarDispositivo();
			break;
	}
	
}else{
	$monitoreo->render();
}  




class MonitoreoController{
	
	function render(){
		require_once('../vistas/theme1/monitoreo_view.php');
		$tema= new Layout();
		$vista=new MonitoreoView();
		$tema->setSeccion('contenido',$vista);

		$tema->render();
	}
	
	function getModelObject(){
		require_once('../modelos/monitoreo_model.php');
		if ( !isset($this->modelObject) ){
			
			$this->modelObject=new monitoreoModel();
		}
		return $this->modelObject;
	}
	
	/*  Devuelve el estado de todos los aparatos, para ser usada con ajax */
	function getDispositivos(){
		$model=$this->getModelObject();		
		$estados=$model->getEstadoDeDispositivos();
		
		
		/*$data=array(
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
		);*/
		$dispositivos=array(
			'data'=>$estados,
			'success'=>true
		);
		echo json_encode( $dispositivos );
	}
	
	function getHorarios(){
		if ( empty( $_POST['idDispositivo']) ){
			$data=array();
		}else{
						
			$fecha=time();
			$idDispositivo=$_POST['idDispositivo'];
			
			$model=$this->getModelObject();
			$data=$model->getHorariosDelDia($idDispositivo, $fecha);
			
		}
		
		//==================================================
		//  Este bloque debe ejectutarse en una tarea programada, mientas tanto...
		//==================================================
		include  ('../modelos/robot_monitoreo.php');
		$robotMonitoreo=new MonitoreoRobot();
		$robotMonitoreo->actualizar();
		//==================================================
		$dispositivos=array(
			'data'=>$data,
			'success'=>true
		);
		echo json_encode( $dispositivos );
	}
	/* Este hará un redirect al controlador de administracion */
	function configurarAula($aulaId){
	
	}
	
	//Enciende el dispositivo, cancelando el evento configurado para el rango de tiempo que envuelve al instante en el que se reaiza la llamada
	function encenderDispositivo(){
		$model=$this->getModelObject();
		echo "ENCENDER";
		$idDispositivo=$_POST['idDispositivo'];
		$model->cancelarEventoActivo($idDispositivo);		
		$model->cambiarEstadoAlDispositivo($idDispositivo, 'ON');
		
	}
	
	/* Para ser usado con ajax  */
	function apagarDispositivo(){
		$model=$this->getModelObject();
		echo "APPAGAR";
		$idDispositivo=$_POST['idDispositivo'];
		$model->cancelarEventoActivo($idDispositivo);		
		$model->cambiarEstadoAlDispositivo($idDispositivo, 'OFF');
	}
}

?>