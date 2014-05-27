<?php
/* conexão à base de dados Trabalho final*/

$mysql_id = mysql_connect('localhost', 'Angelo', '123');

mysql_select_db('trabalhofinal',$mysql_id);

/* selecção dos dados da tabela utilizadores*/

$query='Select * from utilizadores';

$result=mysql_query($query);

while($row=mysql_fetch_array($result)){

echo $row['Username'].'<br/>';
echo $row['Nome'].'<br/>';
}




