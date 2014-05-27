<?php
$mysql_id = mysql_connect('localhost', "Angelo", "123");
mysql_select_db('trabalhofinal',$mysql_id);
// Ficheiro de imagem a guardar na base de dados 
$arquivo = "image/imagemteste.jpg"; 
//Abre o fichei para leitura
$Abrir = fopen ($arquivo, "r"); 
//Lê toda a imagem
$Ler = fread ($Abrir, filesize ($arquivo)); 
// altera os caracters ' " para serem aceites na query
$Ler = addslashes ($Ler); 
//Escreve qualquer coisa no código
$Codigo="YYYY";
$query="INSERT INTO utilizadores (Codigo,Imagem) VALUES ('$Codigo','$Ler')"; 
$result=mysql_query($query) or die("erro: $query"); 
echo"Funcionou"; 
?>


<?php 
        $link = mysql_connect("localhost", "Diana", "1234") or die("Could not connect: " . mysql_error());
        //selecciona a base de dados
        mysql_select_db("trabalhofinal") or die(mysql_error());
        // apanha a imagem pelo select
        $sql = "SELECT Imagem FROM utilizadores WHERE ID_Utilizadores=1";
        // executa o select
        $result = mysql_query("$sql") or die("Invalid query: " . mysql_error());
        // faz o set ao header da imagem
        header("Content-type: image/jpeg");
        echo mysql_result($result, 0);
        // fecha a conexão
        mysql_close($link);
?>

