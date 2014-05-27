<?php
//ligação à base de dados
$mysql_id = mysql_connect('localhost', "Angelo", "123");
mysql_select_db('trabalhofinal',$mysql_id);

//Será que queremos um número de página?
$pag = $_GET['pag'];
if (!isset($pag)){
   $pag = 1;
}
//N de registos mostrados por páginas
$resultados = 10;
//verificar quantos registos temos que mostrar no total
$resultados_query = mysql_query("SELECT * FROM utilizadores");
$resultados_total = mysql_num_rows($resultados_query);
//arredondamos para cima o número total de registos a dividir pelo número de registos por página
$paginas=ceil($resultados_total/$resultados);
$inicio=($pag-1)*$resultados;
//A nossa query 
$resultados_query = mysql_query("SELECT * FROM utilizadores LIMIT $inicio,$resultados");
// faz o cabeçalho da tabela
echo"<table border='2'>";
echo"<tr>";
echo"<td>Apagar</td>";
echo"<td>Editar</td>";
echo"<td>ID_Utilizadores</td>";
echo"<td>Username</td>";
echo"<td>Pass</td>";
echo"<td>Email</td>";
echo"<td>Nome</td>";
echo"<td>Admin</td>";
echo"</tr>";
//começa a tabela com os dados
while($row=mysql_fetch_array($resultados_query)){
echo "<tr>";
echo "<td>"; echo "<a href='Apagar.php?ID_Utilizadores=";echo $row[ID_Utilizadores];echo "' onclick='return confirm(\"Tem a certeza que pretende Apagar?\");'>Delete</a>";
echo "<td>"; echo "<a href='form/form.php?ID_Utilizadores=";echo $row[ID_Utilizadores];echo "'>Editar</a>";echo "</td>";
echo "<td>";echo $row['ID_Utilizadores'];echo"</td>";
echo "<td>";echo $row['Username'];echo"</td>";
echo "<td>";echo $row['Pass'];echo"</td>";
echo "<td>";echo $row['Email'];echo"</td>";
echo "<td>";echo $row['Nome'];echo"</td>";
echo "<td>";echo $row['Admin'];echo"</td>";

echo"</tr>";
}
echo"</table>";
// acabou a tabela, vamos escrever o número de páginas total com um link 
echo "Pág: ";
for($i=1;$i<=$paginas;$i++){
 echo "<a href='paginacao.php?pag=";echo$i;echo "'>$i</a>";echo "</td>";
} 
?>


