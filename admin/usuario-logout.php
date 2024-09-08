<?php
	
	if (isset($_SESSION)) {
		$_SESSION = array();			
	}

  	header("location:usuario-acessar.php");
?>