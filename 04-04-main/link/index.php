<?php

require_once("modelo/Links.php");

echo '<link rel="stylesheet" href="modelo/style.css">';

function desenhaBotao($links) {
    echo '<div class="dropdown">';
    echo '<button class="dropbtn">Times de futebol</button>';
    echo '<div class="dropText">';

    foreach ($links as $l) {
        echo '<span><img src="' . $l->getLinkImg() . '" width="20"> ' . $l->getInfo() . '</span>';
    }

    echo '</div>';
    echo '</div>';
}

$link1 = new Link('https://upload.wikimedia.org/wikipedia/pt/b/b4/Corinthians_simbolo.png', 'Corinthians');
$link2 = new Link('https://logodetimes.com/times/sao-paulo/logo-sao-paulo-4096.png', 'São Paulo');
$link3 = new Link('https://logodetimes.com/times/fortaleza/logo-fortaleza-4096.png', 'Fortaleza');
$link4 = new Link('https://upload.wikimedia.org/wikipedia/pt/a/ac/CRVascodaGama.png', 'Vasco da Gama');
$link5 = new Link('https://logodetimes.com/times/bahia/logo-bahia-4096.png', 'Bahia');
$link6 = new Link('https://logodetimes.com/times/santos/logo-santos-4096.png', 'Santos');
$link7 = new Link('https://logodetimes.com/times/fluminense/logo-fluminense-4096.png', 'Fluminense');
$link8 = new Link('https://logodetimes.com/times/botafogo/logo-botafogo-4096.png', 'Botafogo');
$link9 = new Link('https://upload.wikimedia.org/wikipedia/commons/d/db/Portuguesa_de_Desportos.png', 'Portuguesa');
$link10 = new Link('https://upload.wikimedia.org/wikipedia/pt/1/16/Oper%C3%A1rioFerrovi%C3%A1rioEC%282018%29.png', 'Operário');
$link11 = new Link('https://logodetimes.com/times/cruzeiro/logo-cruzeiro-256.png', 'Cruzeiro');
$link12 = new Link('https://upload.wikimedia.org/wikipedia/pt/8/83/LondrinaEC.png', 'Londrina');


$botao1 = array();
array_push($botao1, $link1, $link2, $link3);

$botao2 = array();
array_push($botao2, $link4, $link5, $link6);

$botao3 = array();
array_push($botao3, $link7, $link8, $link9);

$botao4 = array();
array_push($botao4, $link10, $link11, $link12);

desenhaBotao($botao1);
desenhaBotao($botao2);
desenhaBotao($botao3);
desenhaBotao($botao4);