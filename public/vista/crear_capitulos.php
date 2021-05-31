<!DOCTYPE html>
<?php 

                include '../../config/conexionBD.php';
                $sql="SELECT aut_id, aut_nombre from autorr";
                $result= $conn->query($sql);

                $lib_id = $_GET['lib_id'];

                $sql2="SELECT lib_nombre from libro where lib_id = $lib_id";
                $result2 = $conn->query($sql2);
                $row2=$result2->fetch_assoc();


            ?>
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="../../JavaScr/validacion.js"></script>
        <script type="text/javascript" src="../../JavaScr/buscar.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
        <link rel="stylesheet" href="../../Css/Crear.css">
        <script type="text/javascript" src="../../JavaScr/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../Css/select2.min.css">
        <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
                <script src="../../JavaScr/select2.min.js"></script>



        


        <style type="text/css">
            .error {
            color: red;
            }
        </style>

        

    </head>
    <body>
        <img class="avatar" src="../../Image/inicio.jpeg" id="Logo" alt="Logo de Faz">
        <form id="formulario01" method="POST" action="../controladores/crear_capitulo.php" >
            <br>
            <h3>INGRESAR INFORMACIÓN DEL CAPÍTULO</h3>

            <input  style="visibility:hidden" name='lib_id' value='<?php echo $row2['lib_nombre']; ?>'/>
            <label> <?php echo $row2['lib_nombre']; ?></label>

            

            <br>
            <label for="numero">Numero :</label>
            <input type="text" style="width: 290px;" id="numero" name="numero" value="" placeholder="Ingrese el numero del capítulo ..."  />

            <br>
            
            <br>
            <label for="titulo">Titulo :</label>
            <input type="text" style="width: 290px;" id="titulo" name="titulo" value="" placeholder="Ingrese el titulo del capitulo ..." onkeypress="return validarLetras(this)"/>
            <br>

            
            
            <label for="direccion">Autor :</label>

         <select name="autor" id="cbx_autor" onchange="seleccionarAutor();" style="width: 80%">
                            <option value="0">Seleccionar Autor</option>
                            <?php while ($row=$result->fetch_assoc()) { ?>
                            <option value="<?php echo $row['aut_id'];?>"><?php echo $row['aut_nombre'];?></option>
                            <?php }?> 
                            </select>

                            <br>
                            <span id="lblautorseleccionado"></span>


            <br>

            <input type="submit" id="crear" name="crear" value="Guardar Capitulo" />
            <a href="crear_libro.php">Ingresar un nuevo libro</a>
            <br>

        
        </form>
    </body>

</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#cbx_autor').select2();
	});
</script>












