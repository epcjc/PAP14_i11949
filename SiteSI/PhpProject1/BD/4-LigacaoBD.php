<?php
/* conexão à base de dados Trabalhofinal*/
$mysql_id = mysql_connect('localhost', 'Angelo', '123');
mysql_select_db('trabalhofinal',$mysql_id );
if(!$mysql_id){ die('erro ao ligar à base de dados'.mysql_error());
}
if($mysql_id){
print('A ligação à base de dados foi efectuada com sucesso');
}


?>


