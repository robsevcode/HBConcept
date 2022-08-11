<?php
	$servername="127.0.0.1";
	$username="root";
	$password="";
	$dbname="HBCONCEPT"; 

    $conn=mysqli_connect($servername,$username,$password) or die ("No se establecio la conexion");
	mysqli_select_db($conn, 'HBCONCEPT') or die(mysqli_error($conn));
	
	if (isset($_POST['Entrar'])) 
	{
		$buscarEnBd = mysqli_query($conn,"SELECT * FROM cuentausuario where Correo='".$_POST['correoUsuario']."' AND Password_usuario ='".$_POST['pwdUsuario']."'");
		$rows = mysqli_num_rows($buscarEnBd);
	
		if (($rows)== 0){
			header("Location: paginaLogin.php?id=error");
		}else{
			header("Location: ../html/catalogo.html?username='".$_POST['correoUsuario']."'");
		}
	}
	$conn->close(); 
?>