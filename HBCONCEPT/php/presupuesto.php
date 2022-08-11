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
	    $sql="INSERT INTO solicitudPresupuesto(Nombre_Completo,Correo_Electronico,Telefono,Material,Estilo_Hojas,Color,Cantidad)
			VALUES( '".$_POST['txtNC']."',
					'".$_POST['txtCE']."',
					'".$_POST['txtTC']."',
					'".$_POST['opcMaterial']."',
					'".$_POST['opcEstilo']."',
					'".$_POST['opcColor']."',
					'".$_POST['opcCantidad']."')";
			if ($conn->query($sql)== TRUE){
				header("Location: ../html/SolicitarPresupuesto.html");	
			}
			else{
				echo "Error: ".$sql."<br>".$conn->error;
			}
	}
	  //cerrar la conexion
	    $conn->close();  	
?>