<?php

requery_once(modelo/Links.php);

function desenhaBotao($links) {
    echo '<div class="dropdown">';
    echo '<button class="dropbtn">Times de futebol</button>';
    echo '<div class="dropText">';
    foreach ($links as $l) {
        echo '<span><img src="' . $l->getLinkImg . '"="20" height="20">' . $l->getInfo . '</span>';
    }
    echo '</div>';
    echo '</div>';
}

$link1 = new Link('https://www.google.com/url?sa=i&url=https%3A%2F%2Fbr.pinterest.com%2Fpin%2F709317010068126593%2F&psig=AOvVaw2TakB_5wTo33UQEvYzIGVl&ust=1744116526372000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCJC259H6xYwDFQAAAAAdAAAAABAE','Corinthians');
$link2 = new Link('https://www.google.com/url?sa=i&url=https%3A%2F%2Flogodetimes.com%2Flogo-sao-paulo-brasao-em-png%2F&psig=AOvVaw0c0SNRMbwcSmrIRuqXmngY&ust=1744116198868000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCIDl5NX5xYwDFQAAAAAdAAAAABAE','São Paulo');
$link3 = new Link('https://www.google.com/url?sa=i&url=https%3A%2F%2Flogodetimes.com%2Flogo-fortaleza-brasao-em-png%2F&psig=AOvVaw2sUI2qIKQQAv1dqpgTD7KL&ust=1744116325563000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCPj25fj5xYwDFQAAAAAdAAAAABAE','Fortaleza');
$link4 = new Link('https://www.google.com/url?sa=i&url=https%3A%2F%2Flogodetimes.com%2Flogo-vasco-da-gama-brasao-em-png%2F&psig=AOvVaw3UVsm6fe6a0ISlsCau_PcV&ust=1744116426591000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCJiH8KD6xYwDFQAAAAAdAAAAABAE','Vasco da Gama');
$link5 = new Link('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pngwing.com%2Fpt%2Fsearch%3Fq%3Desporte%2Bclube%2Bbahia&psig=AOvVaw2QloFMnC6UgG5IuD8VmXwb&ust=1744116475349000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCKiTuLr6xYwDFQAAAAAdAAAAABAE','Bahia');
$link6 = new Link('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.imagensempng.com.br%2Fescudo-santos-png%2F&psig=AOvVaw0KrEHrp-KT0nHu3qPfMh7e&ust=1744116561371000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCPCm_OT6xYwDFQAAAAAdAAAAABAE','Santos');
$link7 = new Link('https://www.google.com/url?sa=i&url=https%3A%2F%2Flogodetimes.com%2Flogo-fluminense-brasao-em-png%2F&psig=AOvVaw360fNZfJDEOSba-7_eeGpS&ust=1744116655322000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCICl7I77xYwDFQAAAAAdAAAAABAE','Fluminense');
$link8 = new Link('https://www.google.com/imgres?q=escudo%20botafogo%20png&imgurl=https%3A%2F%2Fw1.pngwing.com%2Fpngs%2F569%2F818%2Fpng-transparent-shield-logo-botafogo-de-futebol-e-regatas-loja-oficial-botafogo-football-copa-sudamericana-sports-rio-de-janeiro-brazil-thumbnail.png&imgrefurl=https%3A%2F%2Fwww.pngwing.com%2Fpt%2Fsearch%3Fq%3Dbotafogo&docid=EStBlzt4eW4TqM&tbnid=QEL8bYm8EFQkxM&vet=12ahUKEwj6toma-8WMAxXdrpUCHXItHQwQM3oECBkQAA..i&w=360&h=360&hcb=2&ved=2ahUKEwj6toma-8WMAxXdrpUCHXItHQwQM3oECBkQAA','Botafogo');
$link9 = new Link('https://www.google.com/url?sa=i&url=https%3A%2F%2Fpt.m.wikipedia.org%2Fwiki%2FFicheiro%3APortuguesa_de_Desportos.png&psig=AOvVaw3Tvuf_qfZQ0NnP_gH1xico&ust=1744116780094000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCJCmnM37xYwDFQAAAAAdAAAAABAJ','Portuguesa');
$link10 = new Link('https://www.google.com/url?sa=i&url=https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FFicheiro%3AOper%25C3%25A1rioFerrovi%25C3%25A1rioEC%25282018%2529.png&psig=AOvVaw1lUwRy5yzaDTgybWATSCof&ust=1744116835363000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCIj_1uP7xYwDFQAAAAAdAAAAABAE','Operário');
$link11 = new Link('https://www.google.com/url?sa=i&url=https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FFicheiro%3ALogo_Cruzeiro_1996.png&psig=AOvVaw0GcOdbdQedtN3mWcfGY9L6&ust=1744116895855000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMCC2oD8xYwDFQAAAAAdAAAAABAE','Cruzeiro');
$link12 = new Link('https://www.google.com/url?sa=i&url=https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FFicheiro%3ALondrinaEC.png&psig=AOvVaw2-GDh-hQzw13sDtFaDdEFY&ust=1744116925873000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMD6i438xYwDFQAAAAAdAAAAABAE','Londrina');

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
