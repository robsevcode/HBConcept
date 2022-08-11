<?php
	$servername="127.0.0.1";
	$username="root";
	$password="";
	$dbname="HBCONCEPT"; 

    $conn=mysqli_connect($servername,$username,$password) or die ("No se establecio la conexion");
	mysqli_select_db($conn, 'HBCONCEPT') or die(mysqli_error($conn));
  
	if (isset($_POST['Carrito'])){ 
		if ($conn->connect_error){
			die("La coneccion fallo:".$conn->connect_error);
		}else{
			$sql="INSERT INTO libreta(Cortado,Material,Estilo_Hojas,Color,Precio)
					VALUES( '".$_POST['Cortado']."',
							'".$_POST['Material']."',
							'".$_POST['EstiloHojas']."',
							'".$_POST['Color']."',
							'".$_POST['amount']."')";		
			
			if ($conn->query($sql)== TRUE){
				header("Location: ../../html/detalle_libreta/Calavera.html");
			}else{
				echo "Error: ".$sql."<br>".$conn->error;
			}
		}
		
	}else{ 
		if ($conn->connect_error){
			die("La coneccion fallo:".$conn->connect_error);
		}else{
			$sql="INSERT INTO libreta(Cortado,Material,Estilo_Hojas,Color,Precio)
					VALUES( '".$_POST['Cortado']."',
							'".$_POST['Material']."',
							'".$_POST['EstiloHojas']."',
							'".$_POST['Color']."',
							'".$_POST['amount']."')";
							
			if ($conn->query($sql)){
				header("Location: ../../html/pago/modoDePago.html");
			}else{
				echo "Error: ".$sql."<br>".$conn->error;
			}
		}
	}
	
	//cerrar la conexion
	$conn->close();  	
?>