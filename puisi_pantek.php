<?php

$bencana = 1;
while(true){
    echo"$bencana tubuh jatuh".PHP_EOL;
    $bencana++;
    if($bencana >= 1_000_000_000_000)
        break;
}

echo "END OF A".PHP_EOL;

$pantek = 1;
while(true){
    echo"$pantek pantek kabur dan sembunyi di istananya" . PHP_EOL;
    $pantek++;
    if($pantek >= 1_000_000_000_000)
        break;
}

echo "END OF P".PHP_EOL;

$baristasastra = [
    "title" => "A for Apatis",
    "subtitle" => "P for Pantek",
    "garis" => "||",
    "author" => "Ahnaf Nadewa",
    "year" => 2025,
    "place" => null
];

$val_array = array_values($baristasastra);

foreach ($val_array as $value){
    echo"$value".PHP_EOL;
}