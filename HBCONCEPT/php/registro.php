<?php
	$servername="127.0.0.1";
	$username="root";
	$password="";
	$dbname="HBCONCEPT"; 

    $conn=mysqli_connect($servername,$username,$password) or die ("No se establecio la conexion");
	mysqli_select_db($conn, 'HBCONCEPT') or die(mysqli_error($conn));
  
    if ($conn->connect_error){
    	die("La coneccion fallo:".$conn->connect_error);
    }else{
		$buscar=mysqli_query($conn,"SELECT * FROM cuentausuario WHERE Correo='".$_POST['correoElectronico']."'");
		$rows = mysqli_num_rows($buscar);
		
		if (($rows)>0){
            header("Location: paginaRegistro.php?id=existente");
	    }else{
	    	$sql="INSERT INTO cuentausuario(Nombre_1,Nombre_2,Apellido_paterno,Apellido_materno,Correo,Password_usuario,Fraccionamiento,Colonia,N_casa,Telefono,Pregunta)
				VALUES( '".$_POST['primerNombre']."',
						'".$_POST['segundoNombre']."',
						'".$_POST['apellidoPaterno']."',
						'".$_POST['apellidoMaterno']."',
						'".$_POST['correoElectronico']."',
						'".$_POST['pwd']."',
						'".$_POST['fracDireccion']."',
						'".$_POST['coloniaDireccion']."',
						'".$_POST['numCasa']."',
						'".$_POST['numTelefono']."',
						'".$_POST['preguntaRecuperacion']."')";
				
				if ($conn->query($sql)== TRUE){
					header("Location: paginaLogin.php");
				}else{
			        echo "Error: ".$sql."<br>".$conn->error;
				}
	    }
	}
	//cerrar la conexion
	$conn->close();  	
?>