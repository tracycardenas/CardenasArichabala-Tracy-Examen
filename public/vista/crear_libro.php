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
        <link rel="stylesheet" href="../../Css/Home.css">


        <link rel="stylesheet" href="../../Css/select2.min.css">
        <script type="text/javascript" src="../../JavaScr/select2.min.js"></script>
        <script type="text/javascript" src="../../JavaScr/jquery-3.6.0.min.js"></script>


        


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

        

        <a id="Inicio" href="./home.php">H O M E</a>



        </li>     
        </ul>           
</nav>

        

    </head>
    <body>
        <form id="formulario01" method="POST" action="../controladores/crear_libro.php" onsubmit="return validarCamposObligatorios()">
            <br>
            <h3 id="ingresarInfo">INGRESAR INFORMACIÓN DEL LIBRO</h3>
            
            <br>
            <label for="nombres">Nombre:</label>
            <input type="text" style="width: 290px;" id="nombres" name="nombres" value="" placeholder="Ingrese el nombre del libro ..." onkeypress="return validarLetras(this)"/>
            <br>
            <span id="mensajeNombres" class="error"></span>

            <br>
            <label for="isbn">ISBN:</label>
            <input type="text" style="width: 290px;" id="isbn" name="isbn" value="" placeholder="Ingrese el isbn ..."  />
            <br>
            <br>
            <label for="numpag">N° de Páginas:</label>
            <input type="text"  style="width: 285px;" id="numpag" name="numpag" value="" placeholder="Ingrese el numero de paginas ..."   />
            <br>
            <span id="mensajeApellidos" class="error"></span>

            <br>
           

            <br>
            <input type="submit" id="crear" name="crear" value="Aceptar" />
            <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
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