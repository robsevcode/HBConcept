<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HB CONCEPT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="../css/util.css">
        <link rel="stylesheet" type="text/css" href="../css/styleRegistro.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    </head>
    
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="login100-more" style="background-image: url('../images/bg.jpg');"></div>
                    <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                        <form action="registro.php" method="POST" class="login100-form validate-form">
                            <span style="font-family:'Poppins',sans-serif" class="login100-form-title p-b-59">Registrar Usuario </span>

							<?php
								if (isset ($_GET["id"]) &&  !empty($_GET["id"])){
									if($_GET["id"] == "existente"){
										echo "<div onclick='quitar()' id='black'>
											</div>
												<div id='cuadroDialogo'>
												<p>Ese correo ya esta en uso, intenta con otro</p>
											</div>";
									}
								}
							?>
						
                            <div class="wrap-input100">
                                <input style="font-family:'Poppins',sans-serif" class="input100" type="text" maxlength="25" name="primerNombre" placeholder="Primer Nombre" required>
                                <span class="focus-input100"></span>
                            </div>
                            
                            <div class="wrap-input100">
                                <input style="font-family:'Poppins',sans-serif" class="input100" type="text" maxlength="25" name="segundoNombre" placeholder="Segundo Nombre">
                                <span class="focus-input100"></span>
                            </div>
                            
                            <div class="wrap-input100">
                                <input style="font-family:'Poppins',sans-serif" class="input100" type="text" maxlength="25" name="apellidoPaterno" placeholder="Apellido Paterno" required>
                                <span class="focus-input100"></span>
                            </div>
                            
                            <div class="wrap-input100">
                                <input style="font-family:'Poppins',sans-serif" class="input100" type="text" maxlength="25" name="apellidoMaterno" placeholder="Apellido Materno" required>
                                <span class="focus-input100"></span>
                            </div>
                            
                            <div class="wrap-input100">
                                <input style="font-family:'Poppins',sans-serif" class="input100" type="text" maxlength="25" name="correoElectronico" placeholder="Correo Electronico" required>
                                <span class="focus-input100"></span>
                            </div>
                            
                            <div class="wrap-input100">
                                <input style="font-family:'Poppins',sans-serif" class="input100" type="text" maxlength="8" name="pwd" placeholder="Contraseña" required>
                                <span class="focus-input100"></span>
                            </div>
                            
                            <div class="wrap-input100">
                                <input style="font-family:'Poppins',sans-serif" class="input100" type="text" maxlength="25" name="fracDireccion" placeholder="Fraccionamiento" required>
                                <span class="focus-input100"></span>
                            </div>

                            <div class="wrap-input100">
                                <input style="font-family:'Poppins',sans-serif" class="input100" type="text" maxlength="25" name="coloniaDireccion" placeholder="Colonia" required>
                                <span class="focus-input100"></span>
                            </div>

                            <div class="wrap-input100">
                                <input style="font-family:'Poppins',sans-serif" class="input100" type="text" maxlength="10" name="numCasa" placeholder="Numero de Casa" required>
                                <span class="focus-input100"></span>
                            </div>
							
                            <div class="wrap-input100">
                                <input style="font-family:'Poppins',sans-serif" class="input100" type="text" maxlength="10" name="numTelefono" placeholder="Telefono" required>
                                <span class="focus-input100"></span>
                            </div>
							
							
							<span style="font-family:'Poppins',sans-serif;margin-top:50px" class="login100-form-title p-b-59">Pregunta de Seguridad </span>
							
                            <div class="wrap-input100">
								<p style="font-family:'Poppins',sans-serif;font-size:20px"> ¿Cúal es el nombre de tu mascota? </p>
                                <input style="font-family:'Poppins',sans-serif" class="input100" type="text" maxlength="45" name="preguntaRecuperacion" placeholder="Respuesta" required>
                                <span class="focus-input100"></span>
                            </div>

                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" style="font-family:'Poppins',sans-serif;font-size:25px" class="login100-form-btn">Siguiente </button>
                            </div>

                            <a href="paginaLogin.php" style="font-family:'Poppins',sans-serif" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">Cancelar <i class="fa fa-long-arrow-right m-l-5"></i>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>