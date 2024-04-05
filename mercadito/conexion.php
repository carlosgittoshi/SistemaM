<?php
$conn = new mysqli("localhost","root","","mercadito");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: " . $mysqli -> connect_error;
	}
?>