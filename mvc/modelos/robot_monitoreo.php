<?php

/*
El robot tiene dos tareas principales:
	1.-Actualizar cada dia la tabla programacion_del_dia, con los valores configurados en la tabla programacion_semanal
	2.-Mantener actualizado el estado de los dispositivos, comparando la hora del servidor con la configuracion de la tabla eventos el dia.
*/
class MonitoreoRobot extends Model{
	
	private function actualizarEstadoDeDispositivos(){
		
	}
	
	private function actualizarProgramacionDiaria(){
		$dbh=$this->getDb();		
		#----------------------------------------------------
		$sql='SELECT DATE_FORMAT(now(),"%Y-%m-%d") as fechaNow,fecha_actual fechaActual FROM config limit 0,1';
		$sth = $dbh->prepare($sql);		
		$sth->execute();
		$fechas = $sth->fetchAll(PDO::FETCH_ASSOC);		
		
		if ($fechas[0]['fechaNow'] == $fechas[0]['fechaActual']){
			return true;						
		}
		//Llegar a este punto significaa que el dia ya ha cambiado, entonces es necesario actualizar la programacion del dia
		
		//Se borra el contenido de la tabla programacion_del_dia
		//Se agregan de la tabla programacion_semanal, los registros correspondientes al dia de la semana
		//voalá
		
		$fechas[0]['fechaNow'];
		//$sql="UPDATE programacion_del_dia SET estado='esperando' ";
		//$sth = $dbh->prepare($sql);		
		//$sth->execute();
	}
	
	public function actualizar(){
		$this->actualizarProgramacionDiaria();
		
		#----------------------------------------------------		
		$dbh=$this->getDb();		
		#----------------------------------------------------
		#	Actualiza la tabla de programacion_del_dia
		#----------------------------------------------------
		
		$sql = 'UPDATE programacion_del_dia SET estado="INDEFINIDO" WHERE estado!="CANCELADO" ';
		$sth = $dbh->prepare($sql);		
		$sth->execute();
		
		$sql = 'UPDATE programacion_del_dia SET estado="ACTIVO" where now() BETWEEN fechaInicio AND  fechaFin AND estado!="CANCELADO"';		
		$sth = $dbh->prepare($sql);				
		$sth->execute();
		
		#----------------------------------------------------
		#	Actualiza la tabla dispositivos
		#----------------------------------------------------
		$sql='UPDATE dispositivos SET estado="OFF" WHERE eventoCancelado!=true';
		$sth = $dbh->prepare($sql);				
		$sth->execute();
		
		$sql='UPDATE dispositivos SET estado="ON" WHERE idDispositivo IN (SELECT dispositivoId FROM programacion_del_dia WHERE estado ="ACTIVO" AND tipo="ON")';
		$sth = $dbh->prepare($sql);				
		$sth->execute();		
		
		$error = $sth->errorInfo();
		if ( !empty($error[2]) ){
			throw new Exception('Error en la capa de datos');

		}
			
		$horarios = $sth->fetchAll(PDO::FETCH_ASSOC);
		return $horarios;	
	
	}
}

?>