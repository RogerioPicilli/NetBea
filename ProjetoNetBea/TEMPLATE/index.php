<?php
require "template.php";

$array = array(
    "titulo" => "Título da Minha Página",
    "nome" => "Rogério Picilli",
    "idade" => 63
); 
$tpl = new Template('template.phtml');
$tpl->render($array);