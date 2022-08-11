<?php
	$servername="127.0.0.1";
	$username="root";
	$password="";
	$dbname="HBCONCEPT"; 

    $conn=mysqli_connect($servername,$username,$password) or die ("No se establecio la conexion");
	mysqli_select_db($conn, 'HBCONCEPT') or die(mysqli_error($conn));
  
    if ($conn->connect_error){
    	die("La coneccion fallo:".$conn->connect_error);
		 
    }
	else{
	    $sql="INSERT INTO contacto(Nombre_Completo,Correo_Electronico,Objetivo,Mensaje)
			VALUES( '".$_POST['txtNC']."',
					'".$_POST['txtCE']."',
					'".$_POST['txtobjetivo']."',
					'".$_POST['txtmensaje']."')";
					
			if ($conn->query($sql)== TRUE){
				header("Location: ../html/SolicitarContacto.html");	
			}
			else{
				echo "Error: ".$sql."<br>".$conn->error;
			}
	}
	  //cerrar la conexion
	    $conn->close();  	
?>