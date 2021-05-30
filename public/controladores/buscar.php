<?php
 //incluir conexión a la base de datos
include '../../config/conexionBD.php';


 $nombreAutor = $_GET['nombreAutor'];
 //echo "Hola " . $cedula;

 $sql = "SELECT  l.lib_nombre, l.lib_isbn, l.lib_numpag, c.cap_titulo, c.cap_numero, a.aut_nombre, a.aut_nacionalidad
FROM libro l , autorr a, capitulo c 
WHERE a.aut_nombre = '$nombreAutor' and a.aut_id= c.autor_aut_id and l.lib_id = c.libro_lib_id";
 

//cambiar la consulta para puede buscar por ocurrencias de letras
 $result = $conn->query($sql);
 echo "<table style='width:100%'>
 <tr>
 <th>Libro</th>
 <th>ISBN</th>
 <th>N° Páginas</th>
 <th>Título del Capítulo</th>
 <th>N° Capítulo</th>
 <th>Autor</th>
 <th>Nacionalidad</th>
 </tr>";
 if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {

 echo "<tr>";
 echo " <td>" . $row['lib_nombre'] ."</td>";
 echo " <td>" . $row['lib_isbn'] . "</td>";
 echo " <td>" . $row['lib_numpag'] . "</td>";
 echo " <td>" . $row['cap_titulo'] . "</td>";
 echo " <td>" . $row['cap_numero'] . "</td>";
 echo " <td>" . $row['aut_nombre'] . "</td>";
 echo " <td>" . $row['aut_nacionalidad'] . "</td>";
 echo "</tr>";
 }
 } else {
 echo "<tr>";
 echo " <td colspan='7'> No existen libros registrados para el autor buscado </td>";
 echo "</tr>";
 }
 echo "</table>";
 $conn->close();

?>