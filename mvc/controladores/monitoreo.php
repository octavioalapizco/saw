<?php 
class MonitoreoController extends Controlador{
	
	function render(){
		if(!isset($_SESSION['username']))
		{
				require_once('../vistas/theme1/login_view.php');
				$tema= new Layout();			//Layout
				$vista=new LoginView();
				$tema->setSeccion('contenido',$vista);

				$tema->render();
				return true;
		}
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