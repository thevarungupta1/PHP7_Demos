<?php

    function getRange ($max = 10) {
        $array = [];

        for ($i = 1; $i < $max; $i++) {
            $array[] = $i;
        }

        return $array;
    }

    foreach (getRange(15) as $range) {
        echo "Dataset {$range} <br>";
    }

    /*foreach (getRange(PHP_INT_MAX) as $range) {
        echo "Dataset {$range} <br>";
    }*/


    /*function getRange ($max = 10) {
        for ($i = 1; $i < $max; $i++) {
            yield $i;
        }
    }

    foreach (getRange(PHP_INT_MAX) as $range) {
        echo "Dataset {$range} <br>";
    }*/


?>