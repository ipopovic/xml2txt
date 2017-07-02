<?php

    $url = 'http://api.apixu.com/v1/current.xml?key=f52678e9942d45eeb13181546170106&q=kraljevo';
    $xml = simplexml_load_file($url) or die("feed not loading");

    //temp
    $temp = $xml->current->temp_c;
    echo $temp . "C";

    //pressure
    $pressure = $xml->current->pressure_mb;
    echo $pressure . "mbar";
    //echo 'Atmosferski pritisak (mbar): ' . $xml->current->pressure_mb;

    //humidity
    $humidity = $xml->current->humidity;
    echo $humidity . "%";


    //temperature txt file
    $temp_file = 'temp.txt';
    $handle = fopen($temp_file, 'w') or die('Cannot open file:  '.$temp_file);
    $data_temp = 'Temperatura:' . $temp . "C";
    fwrite($handle, $data_temp);

    //--------------------Developer Zone ... Do NOT GO DOWN ----------------------------------
    //pressure txt file
//    $pressure_file = 'pressure.txt';
//    $handle = fopen($pressure_file, 'w') or die('Cannot open file:  '.$pressure_file);
//    $data_pressure = 'Temperatura:' . $pressure . "mbar";
//    fwrite($handle, $data_pressure);

    //humidity txt file
//    $humidity_file = 'humidity.txt';
//    $handle = fopen($humidity_file, 'w') or die('Cannot open file:  '.$humidity_file);
//    $data_humidity = 'Temperatura:' . $humidity . "%";
//    fwrite($handle, $data_humidity);