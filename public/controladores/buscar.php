<?php
 //incluir conexión a la base de datos
include '../../config/conexionBD.php';


 $isbn = $_GET['isbn'];
 //echo "Hola " . $cedula;

 echo $isbn;

 $sql = "SELECT    as telefonos
FROM usuario u , telefono t 
WHERE u.usu_codigo = t.usuario_usu_codigo and usu_eliminado = 'N' and (usu_cedula='$cedula' or usu_correo='$cedula')
GROUP by 1;";
echo $sql;
 

//cambiar la consulta para puede buscar por ocurrencias de letras
 $result = $conn->query($sql);
 echo "<table style='width:100%'>
 <tr>
 <th>Nombres</th>
 <th>Apellidos</th>
 <th>Dirección</th>
 <th>Telefonos</th>
 <th>Correo</th>
 <th></th>
 <th></th>
 <th></th>
 </tr>";
 if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {

 echo "<tr>";
 echo " <td>" . $row['usu_nombres'] ."</td>";
 echo " <td>" . $row['usu_apellidos'] . "</td>";
 echo " <td>" . $row['usu_direccion'] . "</td>";
 echo " <td>" . $row['telefonos'] . "</td>";
 echo " <td>" . $row['usu_correo'] . "</td>";
 echo "</tr>";
 }
 } else {
 echo "<tr>";
 echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
 echo "</tr>";
 }
 echo "</table>";
 $conn->close();

?>