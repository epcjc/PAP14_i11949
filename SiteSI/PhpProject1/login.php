<?php
session_start();
if(!isset($_SESSION['username'])){
    //redirecionar para pagina de login
    
include_once 'template.php';
$tplM= str_replace("_Conteudo_", file_get_contents('login.tpl'), $tplM);

if(isset($_POST['Nome'])){
   if($_POST['Nome'] =='Angelo' && $_POST['Password'] == '123' )
   {
       $tplM= str_replace("_Conteudo_", '!!!Bem Vindo!!!', $tplM);
       $_SESSION ['username'] = 'Angelo' ; 
   } else {
       $tplM= str_replace("_Conteudo_", 'Utilizador ou chave invalida!', $tplM);
   }       
}else{
   $tplM= str_replace("_Conteudo_", '', $tplM);
}

$tplM= str_replace("_Conteudo_", '', $tplM);

print $tplM;
} else {
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SEFT']),'/\\');
    $extra = 'index.php';
    header("Location: http://$host$uri/$extra");
    //echo "<script> window.location='index.php' </script>";
}
?>
