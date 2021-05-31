<!DOCTYPE html>
<HTML>

    <HEAD>
        <meta charset="utf-8" language="es"> 
        <TITLE>Agenda </TITLE>
        
        <link href="../../Css/Home.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../../JavaScr/validacion.js"></script>
        <script type="text/javascript" src="../../JavaScr/buscar.js"></script>


    </HEAD>
<body>

    
    
    <header id="titulo">
        <h1><b>BIBLIOTECA VIRTUAL</b></h1>
        <H2><b>__</b></H2>
    </header>

    

    <nav id="menu1">

        <ul><li type="none">

            <form id="buscador" onsubmit="return buscarLibro()" >
                <input type="text" id="nombreAutor" style="width:260px" name="nombreAutor" value="" placeholder="Ingrese el nombre del autor...">
                <input type="button" id="buscar" name="buscar" value="Buscar" onclick="buscarLibro()">
            </form>

        <a id="Inicio" href="./crear_libro.php">Agregar Libro</a>

        

        </li>     
    </ul>           
    </nav>

    <br>
        <div id="informacion"><b></b></div>
    <br>

    <Section id="cont">
        
        <table id="table" style="width:100%">
        <tr>


      <th colspan="7">LIBROS REGISTRADOS</th>

      

    </tr>
            <tr>
                

                <th>Titulo</th>
                <th>ISBN</th>
                <th>Numero de Páginas</th>
            </tr>

        <?php
            include '../../config/conexionBD.php';
            
        

            $sql = "SELECT * from libro";
            

                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
        
                        echo "<tr>";

                        echo " <td>" . $row['lib_nombre'] ."</td>";
                        echo " <td>" . $row['lib_isbn'] . "</td>";
                        echo " <td>" . $row['lib_numpag'] . "</td>";
                        echo "</tr>";
                    }
                    
                } 
                else {
                    echo "<tr>";
                    echo " <td colspan='7'> No existen libros registrados en el sistema </td>";
                    echo "</tr>";
                }


            

            $conn->close();

            ?>
        </table>

       


    </Section>
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
   
</body>

 </HTML>