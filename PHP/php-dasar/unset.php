<?php
$test = "test unset";
$arr = array("ine", "wda", "nue", "poe", "wsda", "nsdue", "pdoe");
foreach ($arr as $rr) {
    echo "tanpa unset() $rr " . PHP_EOL;
}
echo $test . PHP_EOL;
unset($test);
echo $test . PHP_EOL;

$tse = sizeof($arr);
echo $tse . PHP_EOL;
unset($tse);
echo $tse . PHP_EOL;


function add(int $bil1, $bil2)
{
    $result = $bil1 + $bil2;
    return $result;
}

echo add(4, 5);
