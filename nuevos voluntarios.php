<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingreso nuevos voluntarios</title>
</head>
<body>
    <h1>Ingreso nuevos voluntarios</h1>
    <form action="" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        <label>Dirección:</label>
        <input type="text" name="direccion" required><br><br>
        <label>Teléfono:</label>
        <input type="text" name="telefono" required><br><br>
        <input type="submit" name="Agregar" value="Agregar">
    </form>
</body>
</html>
<?php

$conn=mysqli_connect("localhost", "root", "", "organizacion");

if(isset($_POST["Agregar"])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    $query = "INSERT INTO donante (nombre, email, direccion, telefono) VALUES ('$nombre', '$email', '$direccion', '$telefono')";

    if (mysqli_query($conn, $query)){
        echo "El donante se ha agregado correctamente.";
    } else {
        echo "donante no agregado: " . mysqli_error($conn);
    }
}


?>

