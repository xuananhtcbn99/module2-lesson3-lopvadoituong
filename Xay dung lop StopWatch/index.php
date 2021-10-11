<?php
include_once 'StopWatch.php';

$newStopWatch = new StopWatch();

function selectionSort() {
    $sum =0;
    for ($i=1; $i<1000000; $i++) {
        $sum += $i;
    }
    echo $sum;
}

$newStopWatch->start();
selectionSort();
$newStopWatch->stop();
echo "<br>";
echo $newStopWatch->getElapsedTime();
