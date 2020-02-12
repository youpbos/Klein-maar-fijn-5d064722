<?php

$wsgeld = (float) round($argv[1], 2);

define(
    'geldEenheid',
    [
        "50" => "euro",
        "20" => "euro",
        "10" => "euro",
        "5" => "euro",
        "2" => "euro",
        "1" => "euro",
        "0.50" => "cent",
        "0.20" => "cent",
        "0.10" => "cent",
        "0.05" => "cent"
    ]
);
foreach (geldEenheid as $coin => $type) {
    $coin = (float) $coin;
    $wsgeld = round($wsgeld, 2);

    if (floor($wsgeld / $coin) > 0) {
        $times = floor($wsgeld / $coin);
        echo "$times X $coin $type" . PHP_EOL;
        $wsgeld = $wsgeld - ($times * $coin);
    }
}
