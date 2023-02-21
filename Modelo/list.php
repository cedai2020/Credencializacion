<?php

    include('database.php');

    $query = "SELECT * FROM datos ORDER BY id DESC";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query failed');
    }

    $json = array();

    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'id' => $row['id'],
            'nombre' => $row['nombre'],
            'fecha' => $row['fecha_nacimiento'],
            'numero' => $row['numero_tel'],
            'urlFoto' => $row['foto'],
            'urlFirma' => $row['firma']
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;

?>