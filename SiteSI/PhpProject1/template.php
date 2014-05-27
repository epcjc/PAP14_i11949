<?php
$tplM = file_get_contents("main.tpl");
$tplMenu = file_get_contents("menu.tpl");

$menuItems = array(
    'index.php' => 'Pagina Principal',
    'upload.php' => 'Carregar ficheiros',
    'filemanager.php' => 'Gestor de ficheiros',
    'galeria.php' => 'Galeria',
    'login.php' => 'Iniciar sessao',
    'logout.php' => 'Sair',);

$menu="";
foreach ($menuItems as $key => $value) {
    $tmp = str_replace("_URL_", $key, $tplMenu);
    $tmp = str_replace("_Nome_", $value, $tmp);
    $menu .=$tmp;
}
$tplM = str_replace("_Menu_", $menu, $tplM);

?>
