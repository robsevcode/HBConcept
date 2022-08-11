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
	    $sql="INSERT INTO tarjeta_bancaria(Tipo_Cuenta,Nombre_Titular,Numero_Tarjeta,Fecha_Vencimiento,CVV,id_Usuario)
				VALUES( '".$_POST['Tipo_Cuenta']."',
						'".$_POST['NTitular']."',
						'".$_POST['NTarjeta']."',
						'".$_POST['FE']."',
						'".$_POST['CVV']."',
						'".$_POST['id']."')";
						
		if ($conn->query($sql)){
			header("Location: ../../html/pago/modoDePago.html");			
		}else{
			echo "Error: ".$sql."<br>".$conn->error;
		}
	}
	
	//cerrar la conexion
	$conn->close();  	
?>