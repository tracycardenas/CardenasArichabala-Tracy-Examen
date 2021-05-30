<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>Ingresar Capitulos</title>
    <style type="text/css" rel="stylesheet">
    
   
        .error{
        color: red;
        }
    </style>
</head>
    <body>

        <?php
            //incluir conexión a la base de datos
            
            include '../../config/conexionBD.php';


            
            
            //Insertar datos en libro
            $numero = isset($_POST["numero"]) ? mb_strtoupper(trim($_POST["numero"]), 'UTF-8') : null;
            $titulo = isset($_POST["titulo"]) ? mb_strtoupper(trim($_POST["titulo"]), 'UTF-8') : null;
            $autor = isset($_POST["autor"]) ? mb_strtoupper(trim($_POST["autor"]), 'UTF-8') : null;
            $libnombre =$_POST["lib_id"];

            echo $libnombre;
            echo "---";

            $sql2 = "SELECT lib_id from libro WHERE lib_nombre='$libnombre'";
            echo $sql2;
            $result = $conn->query($sql2);

            $row=$result->fetch_assoc();

                $lib_id= $row['lib_id'];
        
    
            

            $sql = "INSERT INTO capitulo VALUES (0, '$numero', '$titulo', $lib_id, $autor )";

  
            if ($conn->query($sql) === TRUE) {

                 //cerrar la base de datos
            $conn->close();
            header("Location: ../vista/crear_capitulos.php?lib_id=$lib_id");  
            } 
        

        ?>


    </body>
</html>