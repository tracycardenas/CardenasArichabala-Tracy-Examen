<!DOCTYPE html>
<?php 

                include '../../config/conexionBD.php';
                $sql="SELECT aut_id, aut_nombre from autorr";
                $result= $conn->query($sql);

            ?>
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="../../JavaScr/validacion.js"></script>
        <script type="text/javascript" src="../../JavaScr/buscar.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
        <link rel="stylesheet" href="../../Css/Crear.css">
        <link rel="stylesheet" href="../../Css/select2.min.css">
        <script type="text/javascript" src="../../JavaScr/select2.min.js"></script>
        <script type="text/javascript" src="../../JavaScr/jquery-3.6.0.min.js"></script>

        


        <style type="text/css">
            .error {
            color: red;
            }
        </style>

        

    </head>
    <body>
        <img class="avatar" src="../../Image/inicio.jpeg" id="Logo" alt="Logo de Faz">
        <form id="formulario01" method="POST" action="../controladores/crear_libro.php" onsubmit="return validarCamposObligatorios()">
            <br>
            <h3>INGRESAR INFORMACIÓN DEL LIBRO</h3>
            
            <br>
            <label for="nombres">Nombre :</label>
            <input type="text" style="width: 290px;" id="nombres" name="nombres" value="" placeholder="Ingrese el nombre del libro ..." onkeypress="return validarLetras(this)"/>
            <br>
            <span id="mensajeNombres" class="error"></span>

            <br>
            <label for="isbn">ISBN :</label>
            <input type="text" style="width: 290px;" id="isbn" name="isbn" value="" placeholder="Ingrese el isbn ..."  />

            <br>
            <label for="numpag">Número de Páginas :</label>
            <input type="text"  style="width: 285px;" id="numpag" name="numpag" value="" placeholder="Ingrese el numero de paginas ..."   />
            <br>
            <span id="mensajeApellidos" class="error"></span>

            <br>
           

            <br>
            <input type="submit" id="crear" name="crear" value="Aceptar" />
            <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
            <br>

        
        </form>
    </body>

</html>