<?php

function desenhaBotao($links) {
    echo '<div class="dropdown">';
    echo '<button class="dropbtn">Times de futebol</button>';
    echo '<div class="dropText">';
    foreach ($links as $l) {
        echo '<span><img src="'.$l->getLinkImg.'"="20" height="20">Info</span>';
    }
    echo '</div>';
    echo '</div>';
}

$link1 = new Link('https://designbraws.s3.us-east-2.amazonaws.com/3dfb4b485378eafe771ac0e564070556.jpg','Corinthians');
$link2 = new Link('https://designbraws.s3.us-east-2.amazonaws.com/3dfb4b485378eafe771ac0e564070556.jpg','São Paulo');
$link3 = new Link('https://designbraws.s3.us-east-2.amazonaws.com/3dfb4b485378eafe771ac0e564070556.jpg','Fortaleza');
$link4 = new Link('https://designbraws.s3.us-east-2.amazonaws.com/3dfb4b485378eafe771ac0e564070556.jpg','Vasco da Gama');
$link5 = new Link('https://designbraws.s3.us-east-2.amazonaws.com/3dfb4b485378eafe771ac0e564070556.jpg','Bahia');
$link6 = new Link('https://designbraws.s3.us-east-2.amazonaws.com/3dfb4b485378eafe771ac0e564070556.jpg','Santos');
$link7 = new Link('https://designbraws.s3.us-east-2.amazonaws.com/3dfb4b485378eafe771ac0e564070556.jpg','Fluminense');
$link8 = new Link('https://designbraws.s3.us-east-2.amazonaws.com/3dfb4b485378eafe771ac0e564070556.jpg','Botafogo');
$link9 = new Link('https://designbraws.s3.us-east-2.amazonaws.com/3dfb4b485378eafe771ac0e564070556.jpg','Portuguesa');
$link10 = new Link('https://designbraws.s3.us-east-2.amazonaws.com/3dfb4b485378eafe771ac0e564070556.jpg','Operário');
$link11 = new Link('https://designbraws.s3.us-east-2.amazonaws.com/3dfb4b485378eafe771ac0e564070556.jpg','Cruzeiro');
$link12 = new Link('https://designbraws.s3.us-east-2.amazonaws.com/3dfb4b485378eafe771ac0e564070556.jpg','Londrina');

$botao1 = array();
array_push($botao1, $link1, $link2, $link3);

$botao2 = array();
array_push($botao2, $link4, $link5, $link6);

$botao3 = array();
array_push($botao3, $link7, $link8, $link9);

$botao4 = array();
array_push($botao4, $link10, $link11, $link12);