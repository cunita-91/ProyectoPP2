<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "turnoscardio";

    $conexion = new mysqli ($server, $user, $pass, $db);
    if ($conexion->connect_error) {
        die("conexion ha fallado". $conexion->connect_errno);
    }
     
    else
     {
        echo "conectado a la bd turnosCardio";
     }

     ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Formulario turnos</title>
  <link rel="stylesheet" href="prueba pagina.css">
</head>
<body>
  <div class="wrapper">
    <div class="title">Registro pacientes</div>
    <form action="#">
      <div class="user-details">
        
        <div class="input-box">
          <span class="details">Nombre</span>
          <input type="text" name="Nombre_pte" placeholder="Nombre" required>
        </div>
     
        <div class="input-box">
          <span class="details">Apellido</span>
          <input type="text" name="Apellido_pte" placeholder="Apellido" required>
        </div>

       <div class="input-box">
        <span class="details">DNI</span>
        <input type="text" name="DNI_pte" placeholder="DNI" required>
      </div>

      <div class="input-box">
        <span class="details">Telefono</span>
        <input type="number" name="Tel_pte" placeholder="Telefono" required>
      </div>

      <div class="input-box">
        <span class="details">Fecha de Nacimiento</span>
        <input type="text" name= "Fecha_Nac" placeholder="Fecha de nacimiento" required>
      </div>

      <div class="input-box">
        <span class="details">Obra social</span>
        <input type="text" name= "OS_pte" placeholder="Obra social" required>
      </div>
      </div>

        <div class="gender-details">
        <input type="radio" name="gender" id="dot-1">
        <input type="radio" name="gender" id="dot-2">
        

        <span class="gender-title">Cardiopata</span>
        <div class="category">
          <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">SI</span>
          </label>

          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">NO</span>
          </label>

          
        </div>
      </div>

      <div class="button">
        <input type="submit" value="Confirmar">
      </div>
    </form>
  </div>
  </body>
</html>
     
     <?php

        $Apellido = $Nombre = $DNI = $OS = $Tel = $Fecha_Nac = $Cardiopata = "";

        if(isset($_POST['Solicitar turno'])){
            $Apellido = $_POST["Apellido_pte"];
            $Nombre = $_POST["Nombre_pte"];
            $DNI = $_POST["DNI_pte"];
            $OS = $_POST["OS_pte"];
            $Tel = $_POST["Tel_pte"];
            $Fecha_Nac = $_POST["Fecha_Nac"];
            $Cardiopata = $_POST["Cardiopata"];
}

if(!empty($Apellido) && !empty($Nombre) && !empty($DNI) && !empty($OS) && !empty($Tel) && !empty($Fecha_Nac) && isset($Cardiopata)) {
  
    $conexion = mysqli_connect("localhost", "root", "", "turnoscardio");

    if(!$conexion){
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    $InsertarDatos = "INSERT INTO pacientes 
                      VALUES ('$Apellido','$Nombre','$DNI','$OS','$Tel','$Fecha_Nac','$Cardiopata')";

    $ejecutarInsertar = mysqli_query($conexion, $InsertarDatos);

} 
?>



