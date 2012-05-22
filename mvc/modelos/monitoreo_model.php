<?php 
class MonitoreoModel extends Model{

	public function getEstadoDeDispositivos(){		
		$sql = 'SELECT *,now() as fecha FROM dispositivos';
		$dbh=$this->getDb();
		$sth = $dbh->prepare($sql);
		$sth->execute();
		$dispositivos = $sth->fetchAll(PDO::FETCH_ASSOC);
		return $dispositivos;		
	}	
	
	public function getHorariosDelDia($idDispositivo, $fecha){
		
		$dbh=$this->getDb();
		$fInicio='2012-05-21 01:00:00';
		$fFin='2012-05-21 12:59:59';
		
		
		$sql = 'SELECT  idEvento,DATE_FORMAT(fechaInicio, "%H:%i:%s" ) as horaInicio,DATE_FORMAT(fechaFin, "%H:%i:%s" )  as horaFin,tipo as evento ,estado
		FROM eventos_programados where dispositivoId =:idDispositivo';
				
		$sth = $dbh->prepare($sql);
		$sth->bindValue(":idDispositivo",$idDispositivo);				
		$sth->execute();
		$horarios = $sth->fetchAll(PDO::FETCH_ASSOC);
		
		
		/**/
		
		return $horarios;			
	}
	
	
	public function cancelarEventoActivo($dispositivoId){
		$dbh=$this->getDb();
		
		$sql = 'UPDATE eventos_programados SET estado="CANCELADO" where dispositivoId = :dispositivoId AND now() BETWEEN fechaInicio AND  fechaFin ';		
		$sth = $dbh->prepare($sql);	
		$sth->bindValue(":dispositivoId",$dispositivoId);						
		$sth->execute();
		
	}
	
	public function cambiarEstadoAlDispositivo($idDispositivo, $estado){
		$dbh=$this->getDb();
		
		$sql='UPDATE dispositivos SET estado=:estado, eventoCancelado=1 WHERE idDispositivo = :idDispositivo';
		
		$sth = $dbh->prepare($sql);	
		$sth->bindValue(":estado",$estado);						
		$sth->bindValue(":idDispositivo",$idDispositivo);		
		$sth->execute();
		
		//print_r($sth->debugDumpParams());exit;
		$error = $sth->errorInfo();
		if ( !empty($error[2]) ){
		
			throw new Exception('Error en la capa de datos');

		}
		
		
	}
	public function actualizarEstadoDeDispositivos($fecha){
		$sql='select  *, now() as fecha from eventos_programados WHERE now() BETWEEN 
 fechaInicio AND  fechaFin';
	}
}

?>