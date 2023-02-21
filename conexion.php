

<?php


/*

$servidor ='localhost';
$usuario = 'root';
$clave = 'root';
$basedeDatos='prueba';

        $db = new mysqli($servidor, $usuario, $clave, $basedeDatos);
        


if(!$db){
    echo "Error en la conexion con el servidor";
}
if(isset($_POST['enviar'])){

    $check = getimagesize($_FILES["fotografia"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['fotografia']['name'];
        $imgContent = $image;
        $image2 = $_FILES['firma']['name'];
        $imgContent2 = $image2;

        $temporal_fotografia=$_FILES['fotografia']['tmp_name'];
        $carpeta='Assets/images';
        $ruta_fotografia=$carpeta.'/'.$nombre_fotografia;
        move_uploaded_file($temporal_fotografia,$carpeta.'/'.$nombre_fotografia);
        $temporal_firma=$_FILES['firma']['tmp_name'];
        $ruta_firma=$carpeta.'/'.$nombre_firma;
        move_uploaded_file($temporal_firma,$carpeta.'/'.$nombre_firma);        
  
    
   $nombre =$_POST["nombre"];
   $Fechadenacimiento=$_POST["FechaNacimiento"];
   $numero=$_POST["telefono"];


   $insert = $db->query("INSERT INTO datos (nombre,fecha_nacimiento,numero_tel,foto,firma) VALUES('carñlos',
                                              '2015-10-10',
                                              '775788999',
                                              'imagen.png',
                                              'imagen.png')");
                                              
  // $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
  if($insert){
    echo "File uploaded successfully.";
}else{
    echo "File upload failed, please try again.";
} 
}else{
    echo "Please select an image file to upload.";
}
}

   


*/


if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["fotografia"]["tmp_name"]);

    if($check !== false){
        $nombre = $_POST['nombre'];
        $fechaNacimiento = $_POST['FechaNacimiento'];
        $telefono = $_POST['telefono'];

        $image = $_FILES['fotografia']['name'];
        $imgContent = $image;

        $image2 = $_FILES['firma']['name'];
        $imgContent2 = $image2;
        


        $temporal_fotografia=$_FILES['fotografia']['tmp_name'];
        $temporal_firma=$_FILES['firma']['tmp_name'];

        $carpeta='Assets/images';
        $ruta_fotografia=$carpeta.'/'.$image;
        $ruta_firma=$carpeta.'/'.$image2;
        move_uploaded_file($temporal_fotografia,$carpeta.'/'.$image);
        move_uploaded_file($temporal_firma,$carpeta.'/'.$image2);


 

        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = 'root';
        $dbName     = 'prueba';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $db->query("INSERT into datos (nombre,  fecha_nacimiento, numero_tel,  foto, firma) VALUES ('$nombre','$fechaNacimiento','$telefono','$imgContent', '$imgContent2')");
        if($insert){
            echo '<script language="javascript">alert("Archivos cargados correctamente.");window.location.href="index.php"</script>';
        }else{
            echo '<script language="javascript">alert("Fallo al subir Archivos.");window.location.href="index.php"</script>';

        } 
    }else{
        echo "Please select an image file to upload.";
    }
}

?>