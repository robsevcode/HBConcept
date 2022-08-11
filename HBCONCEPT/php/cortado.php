<?php
    $servername="127.0.0.1";
    $username="root";
    $password="";
    $dbname="HBCONCEPT";
    
    $conn=new mysqli($servername,$username,$password,$dbname);
    $connection=mysql_connect($servername,$username,$password) or die
    ("No  se establecio la conexion");

    mysql_select_db("HBCONCEPT");
  
    if ($conn->connect_error)
    {
    	die("La coneccion fallo:".$conn->connect_error);
		 
    }
	else
	{
	    $sql="INSERT INTO cortado(Nombre,Correo,Telefono,NombreProducto,Descripcion)
			VALUES( '".$_POST['txtNC']."',
					'".$_POST['txtCE']."',
					'".$_POST['txtTC']."',
					'".$_POST['txtNP']."',
					'".$_POST['txtdescripcion']."')";
			if ($conn->query($sql)== TRUE)
			{
				header("Location: ../html/SolicitarCortado.html");	
			}
			else
			{
				echo "Error: ".$sql."<br>".$conn->error;
			}
	}
	  //cerrar la conexion
	    $conn->close();  	
?>