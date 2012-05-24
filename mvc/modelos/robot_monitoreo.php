<?php

class MonitoreoRobot extends Model{
	
	private function initDia($fecha){
			$sql="UPDATE eventos_programados SET estado='esperando' ";
	}
	
	public function actualizar(){
		$dbh=$this->getDb();		
		#----------------------------------------------------
		$sql='SELECT DATE_FORMAT(now(),"%Y-%m-%d") as fechaNow,fecha_actual fechaActual FROM config limit 0,1';
		$sth = $dbh->prepare($sql);		
		$sth->execute();
		$fechas = $sth->fetchAll(PDO::FETCH_ASSOC);
		
		
		if ($fechas[0]['fechaNow'] != $fechas[0]['fechaActual']){
			$this->initDia($fechas[0]['fechaNow']);
		}
		#----------------------------------------------------
		#	Actualiza la tabla de eventos_programados
		#----------------------------------------------------
		
		$sql = 'UPDATE eventos_programados SET estado="INDEFINIDO" WHERE estado!="CANCELADO" ';
		$sth = $dbh->prepare($sql);		
		$sth->execute();
		
		$sql = 'UPDATE eventos_programados SET estado="ACTIVO" where now() BETWEEN fechaInicio AND  fechaFin AND estado!="CANCELADO"';		
		$sth = $dbh->prepare($sql);				
		$sth->execute();
		
		#----------------------------------------------------
		#	Actualiza la tabla dispositivos
		#----------------------------------------------------
		$sql='UPDATE dispositivos SET estado="OFF" WHERE eventoCancelado!=true';
		$sth = $dbh->prepare($sql);				
		$sth->execute();
		
		$sql='UPDATE dispositivos SET estado="ON" WHERE idDispositivo IN (SELECT dispositivoId FROM eventos_programados WHERE estado ="ACTIVO" AND tipo="ON")';
		$sth = $dbh->prepare($sql);				
		$sth->execute();
		//$sth->bindValue(":fInicio",$fInicio, PDO::PARAM_STR);				
		//$sth->bindValue(":fFin",$fFin, PDO::PARAM_STR);				
		//print_r($sth->debugDumpParams());exit;
		
		$error = $sth->errorInfo();
		if ( !empty($error[2]) ){
			throw new Exception('Error en la capa de datos');

		}
			
		$horarios = $sth->fetchAll(PDO::FETCH_ASSOC);
		return $horarios;	
	
	}
}

?>