<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "turnoscardio";

$conexion = new mysqli($server, $user, $pass, $db);
if ($conexion->connect_error) {
    die("La conexión ha fallado: " . $conexion->connect_errno);
} else {
    echo "Conectado a la bd turnosCardio";
}

$Apellido = $Nombre = $DNI = $OS = $Tel = $Fecha_Nac = $Cardiopata = "";

if (isset($_POST['Confirmar'])) {
    $Apellido = $_POST["Apellido_pte"];
    $Nombre = $_POST["Nombre_pte"];
    $DNI = $_POST["DNI_pte"];
    $OS = $_POST["OS_pte"];
    $Tel = $_POST["Tel_pte"];
    $Fecha_Nac = $_POST["Fecha_Nac"];
    $Cardiopata = $_POST["Cardiopata"];

    $InsertarDatos = $conexion->prepare("INSERT INTO Pacientes (Apellido, Nombre, DNI, OS, Tel, Fecha_Nac, Cardiopata) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $InsertarDatos->bind_param("ssisiss", $Apellido, $Nombre, $DNI, $OS, $Tel, $Fecha_Nac, $Cardiopata);

    $InsertarDatos->execute();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Formulario turnos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">Registro pacientes</div>
        <form action="conexion.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Apellido</span>
                    <input type="text" name="Apellido_pte" placeholder="Apellido" required>
                </div>
             
                <div class="input-box">
                    <span class="details">Nombre</span>
                    <input type="text" name="Nombre_pte" placeholder="Nombre" required>
                </div>

                <div class="input-box">
                    <span class="details">DNI</span>
                    <input type="text" name="DNI_pte" placeholder="DNI" required>
                </div>

                <div class="input-box">
                    <span class="details">Obra social</span>
                    <input type="text" name= "OS_pte" placeholder="Obra social" required>
                </div>

                <div class="input-box">
                    <span class="details">Telefono</span>
                    <input type="number" name="Tel_pte" placeholder="Telefono" required>
                </div>

                <div class="input-box">
                    <span class="details">Fecha de Nacimiento</span>
                    <input type="date" name= "Fecha_Nac" placeholder="Fecha de nacimiento" required>
                </div>
            </div>

            <div class="gender-details">
                <span class="details">Cardiopata</span>
                <input type="radio" name="Cardiopata" id="dot-1" value="SI">
                <input type="radio" name="Cardiopata" id="dot-2" value="NO">
            </div>

            <div class="button">
                <input type="submit" name="Confirmar" value="Confirmar">
            </div>
        </form>
    </div>
</body>
</html>
