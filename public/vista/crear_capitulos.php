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
        <link rel="stylesheet" href="../../Css/Home.css">
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

<header id="titulo">
        <h1><b>BIBLIOTECA VIRTUAL</b></h1>
        <H2><b>__</b></H2>
    </header>

        <nav id="menu1">

        <ul><li type="none">

        

        <a href="crear_libro.php" id="InicioL">Ingresar un nuevo libro</a>




        </li>     
        </ul>           
</nav>

        

    </head>
    <body>
        <form id="formulario01" method="POST" action="../controladores/crear_capitulo.php" >
            <br>
            <h3>INGRESAR CAPÍTULO PARA EL LIBRO:</h3>
            <h3> <?php echo $row2['lib_nombre']; ?></h3>
            <input  style="visibility:hidden" name='lib_id' value='<?php echo $row2['lib_nombre']; ?>'/>

            

            <br>
            <label for="numero">Numero :</label>
            <input type="text"  id="numero" name="numero" value="" placeholder="Ingrese el numero del capítulo ..."  />

            <br>
            
            <br>
            <label for="titulo">Titulo :</label>
            <input type="text"  id="titcap" name="titulo" value="" placeholder="Ingrese el titulo del capitulo ..." onkeypress="return validarLetras(this)"/>
            <br>
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
            <br>
            <br>
            

        
        </form>
        <img src="../../Image/registro.png">

    </body>
    <footer>
   <fieldset id="f1">
      <legend>Redes Sociales</legend>
      <a href="https://www.facebook.com/tracyy.cardenas/"><img src="../../Image/fb.png"  width="30" height="30" alt="" /></a> 
      <a href="https://www.instagram.com/tracy.car7/"><img src="../../Image/ig.png"  width="30" height="30" alt="" /></a> 
      <img src="../../Image/firma.png"alt=""  width="320" height="50"/>
   
   </fieldset >

   <fieldset>
      <legend>Información Personal</legend>
         <p><strong>Nombre: </strong> Tracy Rocío Cárdenas Arichábala</p>
         <p><strong>Organización:</strong> Universidad Politécnica Salesiana</p>
   </fieldset> 

  <fieldset>
     <legend>Información de contacto</legend>
     <p><strong>Email:</strong> <a href="mailto:tcardenasa@est.ups.edu.ec "> tcardenasa@est.ups.edu.ec </a></p>
     <p><strong>Celular: </strong><a href="tel:+593990130270">(593) 99 013 0270</a></p>
  </fieldset>
  
   <p id="copy"><strong>Todos los derechos reservados &copy;</strong></p>

 </footer>

</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#cbx_autor').select2();
	});
</script>












