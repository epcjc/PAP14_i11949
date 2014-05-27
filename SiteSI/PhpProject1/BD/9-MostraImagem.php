<?php 
$link = mysql_connect("localhost", "Angelo", "123") or die("Could not connect: " . mysql_error());
mysql_select_db("trabalhofinal") or die(mysql_error());      
$resultados_query = mysql_query("SELECT * FROM utilizadores where ID_Utilizadores=1");
echo"<table border='2'>";
echo"<tr>";
echo"<td>Id</td>";
echo"<td>Imagem</td>";
echo"</tr>";
while($row=mysql_fetch_array($resultados_query)){
echo "<tr>";
echo "<td>";echo $row['ID_Utilizadores'];echo"</td>";
echo "<td>";
     echo "<img src='show_image.php?Id=$row[ID_Utilizadores]'";
echo "</td>";
echo "Este é o $row[ID_Utilizadores]";
 }
echo"</tr>";
echo"</table>";
?>

