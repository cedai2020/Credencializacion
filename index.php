<!DOCTYPE html>
<html>
    <meta lang="es">
    <meta charset="utf-8">
    <head>
        <title>Formulario</title>
        <link rel="stylesheet" type="text" href="estilos.css">
    </head>
    <link rel="stylesheet" href="./estilos.css">
    <body>



        <div class="form">
            <form action="conexion.php" method="post" enctype="multipart/form-data">
             <p>Nombre</p>
             <label for="Nombre">Ingrese su nombre</label>
             <br>
             <input type="text" name="nombre" placeholder="Nombre" required>
             <p>Fecha de Nacimiento</p>
             <label for="Fecha de Nacimiento">Ingrese su Fecha de Nacimiento</label>
             <br>
             <input  type="date" name="FechaNacimiento" placeholder="Fecha de Nacimiento" required>
             <p>Número</p>
             <label for="Teléfono">Ingrese su número telefonico</label>
             <br>
             <input type="tel" name="telefono" placeholder="teléfono" required>
             <br>
             <p>Fotografía</p>
             <label for="Foto">Subir Fotografía</label>
             <br>
             <input type="file"    name="fotografia">
             <br>
             <p>Firma</p>
             <label for="Firma">Subir Firma</label>
             <br>
             <input type="file"    name="firma">
             <br>
             <br>
        <input type="submit" name="submit" value="ENVIAR"/>

             <br>

             <button id="boton"><a class="texto-boton"  href="Vista/listado.html">Listado</a></button>

            </form>
        </div>
        
     

        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    </body>
</html>
