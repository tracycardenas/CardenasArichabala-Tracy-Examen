<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>Ingresar Nuevo Libro</title>
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
            $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null;
            $isbn = isset($_POST["isbn"]) ? mb_strtoupper(trim($_POST["isbn"]), 'UTF-8') : null;
            $numpag = isset($_POST["numpag"]) ? mb_strtoupper(trim($_POST["numpag"]), 'UTF-8') : null;

            


            $sql = "INSERT INTO libro VALUES (0, '$nombres', '$isbn', $numpag )";

  
            if ($conn->query($sql) === TRUE) {
                $lib_id=$conn->insert_id;

                 //cerrar la base de datos
            $conn->close();
            header("Location: ../vista/crear_capitulos.php?lib_id=$lib_id");




				 
				
               
                
            } 
        
            

            
            

           
        ?>


    </body>
</html>