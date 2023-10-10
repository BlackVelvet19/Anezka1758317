<!DOCTYPE html>
<html>
<head>
    <title>Información Obtenida</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFDDB2;
            color: #FF9A18;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        #encabezado {
            background-color: #FFBB65;
            color: #824900;
            padding: 10px;
            font-weight: bold;
        }

        #pie {
            background-color: #FFBB65;
            color: #824900;
            padding: 10px;
        }

        #informacion {
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div id="encabezado">INFORMACIÓN OBTENIDA</div>
    <div id="informacion">
        <h2>¡Tus datos están seguros!</h2>
        <!-- Aquí la información obtenida -->
        <?php
            // Obtener la información de la solicitud GET
            $nombre = $_GET['nombre'];
            $correo = $_GET['correo'];
            $telefono = $_GET['telefono'];
            $password = $_GET['password'];

            // Mostrar la información
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Correo Institucional: $correo</p>";
            echo "<p>Número Telefónico: $telefono</p>";
            echo "<p>Contraseña: $password</p>";
        ?>
    </div>
    <div id="pie">¡TUS DATOS ESTÁN SEGUROS!</div>
</body>
</html>