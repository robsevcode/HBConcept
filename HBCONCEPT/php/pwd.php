<?php
	$servername="127.0.0.1";
	$username="root";
	$password="";
	$dbname="HBCONCEPT"; 

    $conn=mysqli_connect($servername,$username,$password) or die ("No se establecio la conexion");
	mysqli_select_db($conn, 'HBCONCEPT') or die(mysqli_error($conn));
	
	if (isset($_POST['Listo'])) 
	{
		$buscarEnBd = mysqli_query($conn,"SELECT * FROM cuentausuario where Correo='".$_POST['correoElectronico']."' AND Pregunta ='".$_POST['preguntaRecuperacion']."'");
		$rows = mysqli_num_rows($buscarEnBd);
	
		if (($rows)==0){
			header("Location: paginaPwd.php?id=error");
		}else{
			header("Location: paginaPwd.php?id=validar");
		}
	}
	$conn->close(); 
?>