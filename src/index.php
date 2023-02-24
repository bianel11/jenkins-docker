<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
</head>
<body>
    Listado de usuarios

    <?php
        $host = "db";
        $user = "1-17-2459";
        $password = "1-17-2459";
        $dbname = "base1";

        $conn = pg_connect("host=$host dbname=$dbname user=$user password=$password") or die('Could not connect: ' . pg_last_error());
        
        // crear tabla si no existe
        $query = "CREATE TABLE IF NOT EXISTS usuarios (codigo serial PRIMARY KEY, nombre varchar(50) NOT NULL)";
        $result = pg_query($conn, $query);

        // insertar datos si no existen
        $query = "SELECT * FROM usuarios";
        $result = pg_query($conn, $query);
        if (pg_num_rows($result) == 0)
            $query = "INSERT INTO usuarios (nombre) VALUES ('Juan'), ('Pedro'), ('Maria'), ('Jose'), ('Luis')";
            pg_query($conn, $query);


        $query = "SELECT * FROM usuarios";
        $result = pg_query($conn, $query);
    ?>
    <table id="usuarios">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
        </tr>
        <?php
        while ($row = pg_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["codigo"] . "</td>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <style>
        #usuarios {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #usuarios td, #usuarios th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #usuarios tr:nth-child(even){background-color: #f2f2f2;}

        #usuarios tr:hover {background-color: #ddd;}

        #usuarios th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</body>
</html>