<?php

    include('database.php');

    if(isset($_POST['id'])) {

        $id = $_POST['id'];

        $query = "SELECT * FROM datos WHERE id = $id";

        $result = mysqli_query($connection, $query);

        $row = $result->fetch_assoc();

        $nombre = $row['nombre'];
        $fecha = $row['fecha_nacimiento'];
        $numero = $row['numero_tel'];
        $foto = $row['foto'];
        $firma = $row['firma'];

        include('generar-pdf.php');

        generar($nombre, $fecha, $numero, $foto, $firma);

        
    }

?>