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
         <title>FORMULARIO PACIENTES</title>
         <link rel= "stylesheet" type="text/css" href="estilo_css">
     </head>
     <body>
         <div class= "form">
             <form action ="#" name ="turnosCardio" method= "POST">
             <img src="../PROYECTO PP2/img/solicitar-turno.jpg" alt="Logotipo de la empresa">
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
                  <input type="reset">
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



