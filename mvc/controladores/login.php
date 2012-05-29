<?php
session_start();
require_once('../mvc.php');

$login=new LoginController();


if ( isset($_REQUEST['accion']) ){	
	switch($_REQUEST['accion']){
		case 'login':			
			$login->login();
			break;		
	}
}else{
	$login->render();
} 

class LoginController{

	function render(){		
		require_once('../vistas/theme1/login_view.php');
		$tema= new Theme();			//Layout
		$vista=new LoginView();
		$tema->setVista($vista);
		$footer=new Vista();
		$tema->setFooter($footer);
		$tema->render();
	}
	
	function getModelObject(){
		require_once('../modelo.php');
		if ( !isset($this->modelObject) ){
			
			$this->modelObject=new Model();
		}
		return $this->modelObject;
	}
	
	function login(){
		/*Connection to database logindb using your login name and password*/
		
		//$db=mysql_connect('localhost','root','') or die(mysql_error());
		$model=$this->getModelObject();
		$dbh=$model->getDb();
		//mysql_select_db('saw');

		/*additional data checking and striping*/
		$login=mysql_real_escape_string(strip_tags(trim($_POST['username'])));
		$pass=mysql_real_escape_string(strip_tags(trim($_POST['password'])));

		//$q=mysql_query("SELECT * FROM login WHERE login='A or 1=1;//' AND pass='{$_POST['pass']}'",$db) or die(mysql_error());
		
		$sql = 'SELECT * FROM login WHERE login=:login AND pass=:pass';		
		$sth = $dbh->prepare($sql);
		$sth->bindValue(":login",$login);						
		$sth->bindValue(":pass",$pass);		
		$sth->execute();
		$usuarios = $sth->fetchAll(PDO::FETCH_ASSOC);
		if( !empty($usuarios) )
		{
		
			$_SESSION['username'] = $_POST['username'];
			require_once('../vistas/theme1/monitoreo_view.php');
			$tema= new Theme();
			$vista=new MonitoreoView();
			$tema->setVista($vista);
			$footer=new Vista();
			$tema->setFooter($footer);	
			$tema->render();
		}
		else
		{
			//$login= 'Wrong login or password';
			$this->render();
		}

		mysql_close($db);


	}	
}
?>