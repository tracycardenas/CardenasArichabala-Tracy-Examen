<?php 
    include '../../config/conexionBD.php';

    $aut_id = $_GET['autor_id'];

    $sql = "SELECT aut_nombre, aut_nacionalidad from autorr where aut_id=$aut_id";
 
 $result = $conn->query($sql);
 echo "<table style='width:100%'>
 <tr>
 <th>Nombres</th>
 <th>Nacionalidad</th>
 </tr>";
 if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {

 echo "<tr>";
 echo " <td>" . $row['aut_nombre'] ."</td>";
 echo " <td>" . $row['aut_nacionalidad'] . "</td>";
 echo "</tr>";
 }
 } else {
 echo "<tr>";
 echo " <td colspan='7'> No existen autores registrados </td>";
 echo "</tr>";
 }
 echo "</table>";
 $conn->close();





 
 
 
 
 
 
 ?>