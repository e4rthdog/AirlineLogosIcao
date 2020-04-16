<?php

$codes = file("icao_airline_codes.txt");
foreach ($codes as $code) {
    $url = "https://e1.flightcdn.com/images/airline_logos/" . trim($code) . "png";
    file_put_contents("/" . trim($code) . ".png", file_get_contents($url));
}

