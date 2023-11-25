<?php
    $servidor= "localhost";
    $usuario= "root";
    $clave= "";
    $BaseDeDatos="turnoscardio";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $BaseDeDatos); 

    if(!$enlace){
        echo "Error en la conexion con el servidor";
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>FORMULARIO PACIENTES</title>
	<link rel= "stylesheet" type="text/css" href="estilo_css">
</head>
<body>
	<div class= "form">
		<form action ="#" method= "POST">
		<img src="../PROYECTO PP2/img/logoici.jpg" alt="Logotipo de la empresa">
		<br>
		<br>
		
			<P>APELLIDO</P>
			<input type="text" name="Apellido_pte" placeholder="Apellido" required>
			<br>

			<P>NOMBRE</P>
			<input type="text" name="Nombre_pte" placeholder="Nombre" required>
			<br>
			
			<P>DNI</P>
			<input type="text" name="DNI_pte" placeholder="DNI" required>
			<br>
	
			<P>OBRA SOCIAL</P>
			<input type="text" name="OS_pte" placeholder="OS" required>
			<br>

			<P>TELEFONO</P>
			<input type="text" name="Tel_pte" placeholder="TELEFONO" required>
			<br>

			<P>FECHA DE NACIMIENTO</P>
			<input type="date" name="Fecha_Nac" placeholder="FECHA DE NACIMIENTO" required>
			<br>

			<P>CARDIOPATA</P>
			<input type="btn" name="Cardiopata" placeholder="CARDIOPATA" required>
			<br>
			<br>
			<br>

			 <input type="submit" class ="btn" name="Solicitar turno" value = "Solicitar turno">
		</form>
	 </div>


</body>
</html>

<?php
	if(isset($_POST['Solicitar Turno'])){
		$Apellido_pte= $_POST["Apellido_pte"];
		$Nombre_pte= $_POST["Nombre_pte"];
		$DNI_pte=$_POST["DNI_pte"];
		$OS_pte=$_POST["OS_pte"];
        $Fecha_Nac =$_POST["Fecha_Nac"];
		$Tel_pte= $_POST["Tel_pte"];
		$Cardiopata=$_POST["Cardiopata"];
	}

	$InsertarDatos = "INSERT INTO Pacientes VALUES ('$Apellido_pte','$Nombre_pte','$DNI_pte','$OS_pte','$Fecha_Nac','$Tel_pte',$Cardiopata)";

	$ejecutarInsertar = mysqli_query($enlace, $InsertarDatos);

	if(!$ejecutarInsertar){
		echo "Error al insertar datos";
	}
?>