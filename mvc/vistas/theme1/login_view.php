<?php 

class LoginView extends Vista{
	var $nombre="Login";
	function render(){
		include ('login/login.html.php');
	}
	
}

?>