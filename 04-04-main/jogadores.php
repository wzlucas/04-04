<?php

function linha($dadosJogadores)
{
    echo "<tr style='background-color: " . $dadosJogadores["color"] . ";'>";
    echo "<td>" . $dadosJogadores["numero"] . "</td>";
    echo "<td>" . $dadosJogadores["nome"] . "</td>";
    echo "</tr>";
}

$jogador = [
    ["numero" => "1",  "nome" => "Tafarel", "color" => "yellow"],
    ["numero" => "2",  "nome" => "Jorginho", "color" => "green"],
    ["numero" => "13",  "nome" => "Aldair", "color" => "yellow"],
    ["numero" => "15",  "nome" => "Márcio Santos", "color" => "green"],
    ["numero" => "6",  "nome" => "Branco", "color" => "yellow"],
    ["numero" => "5",  "nome" => "Mauro Silva", "color" => "green"],
    ["numero" => "8",  "nome" => "Dunga", "color" => "yellow"],
    ["numero" => "17",  "nome" => "Mazinho", "color" => "green"],
    ["numero" => "9",  "nome" => "Zinho", "color" => "yellow"],
    ["numero" => "11",  "nome" => "Romário", "color" => "green"], 
    ["numero" => "7",  "nome" => "Bebeto", "color" => "yellow"],
];

echo "<table border=1>";

// Linha de cabeçalho
echo "<tr>";
echo "<td><b>Numero</b></td>";
echo "<td><b>Nome</b></td>";
echo "</tr>";

// Linha de dados
foreach ($jogador as $jogadores) {
    linha($jogadores);
}

echo "</table>";

?>
