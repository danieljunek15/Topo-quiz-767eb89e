<?php
echo "> Ik heb een ULTRA moeilijke topo test voor jouw gemaakt.".PHP_EOL;
echo "> Be prepared!!!!".PHP_EOL;

$goed = 0;

$fout = 0;

$check = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
);

foreach ($check as $question => $answer) {

    echo "> Wat is de hooftstad van $question ?".PHP_EOL;
    $input = readline("> ");
    if ($input === $answer ){
        echo "> yheeee goed.".PHP_EOL;
        $goed++;
    }
    else{
        echo "> OOF FOUT BOOMER".PHP_EOL;
        $fout++;
    }
}

echo "zoveel antwoorden waren goed " . $goed . ", boomer!".PHP_EOL;
echo "Zoveel antwoorden waren fout " . $fout . ", Boomer!";