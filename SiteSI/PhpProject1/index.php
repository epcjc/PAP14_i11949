<?php
include_once 'valida.php';
include_once'template.php';
$tplC = file_get_contents("conteudo.tpl");
$conteudo= str_replace("_Title_", "Escola de futebol Contra-Ataque", $tplC);


if(isset($_POST['Nome'])){
   $dados = 'Nome:'.$_POST['Nome'].'<br>';
   $dados .= 'Morada:'.$_POST['Morada'].'<br>';
   $dados .= 'Sexo:'.((isset($_POST['Sexo']))?'Masculino':'Feminino').'<br>';
   $dados .= 'Idade'.$_POST['Idade'].'<br>';
   $dados .= 'Posicao'.$_POST['Posiçao'].'<br>';
   $dados = '<b>Jogador:</b>'.$_POST['Nome'].'<br>';
     $dados = '<b>Jogador:</b>'.$_POST['Nome'].'<br>';
   $conteudo= str_replace("_Conteudo_", $dados, $conteudo);
}else{
   $conteudo= str_replace("_Conteudo_", file_get_contents('form.tpl'), $conteudo);
}

$tplM = str_replace("_Conteudo_", $conteudo, $tplM);


print $tplM;
?>
 <h3 align="left"> Conhe&ccedil;a a nossa Hist&oacute;ria ! </h3>
    <p align="left" ><font size="2"> A nossa escola &eacute uma das escolas de futebol, mais concentuadas do pa&iacutes, por ano v&atildeo cerca de 2,3 jogadores &aacutes camadas jovens da sele&ccedil&atildeo nacional. E todos anos participamos em torneios fora do pa&iacutes onde est&atildeo olheiros dos mais concentuados clubes da Europa!</font></p>
    <p  align="justify"><font size="2"> A escola de Futebol "contra-ataque" reside em Sobrado, fundada em 2009,
        que desde a sua funda&ccedil;&atilde;o tem sempre formado jogadores de qualidade, tanto a nivel t&eacutecnico como a nivel psicol&oacutegico.</font></p>
    <p align="justify"><font size="2">N&atildeo s&oacute aceitamos rapazes, como tamb&eacutem aceitamos raparigas (at&eacute ao 12 anos de idade).</font></p>
    
    <h3 align="justify">como fazer a inscri&ccedil;&atilde;o?</h3>
    <p align ="justify"><font size="2"> 1. Pode responder ao formul&aacuterio em cima;</font></p>
    <p align="justify"><font size="2"> 2. Ou ent&atilde;o pode ir a Rua da vale Nº15, que &eacute; onde residimos!</font></p> 
</form>
 
<h3 align="justify">contacto:</h3><p align ="justify"><font size="2"> 224115952</font></p>
    </body>