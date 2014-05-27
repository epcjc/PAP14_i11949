<?php
/* conexão à base de dados Trabalho final*/
$mysql_id = mysql_connect('localhost', 'Angelo', '123');
mysql_select_db('trabalhofinal',$mysql_id);
if(!mysql_select_db('trabalhofinal',$mysql_id)){
die ('Erro'.mysql_error());
}
$query='update utilizadores set Username="Angelo",Email="angelo-martinx_11@hotmail.com@hotmail.com" where ID_Utilizadores=1';
$result=mysql_query($query);
if(!$result){
echo(mysql_error());
}
else{
echo("O Registo foi actualizado!");
}