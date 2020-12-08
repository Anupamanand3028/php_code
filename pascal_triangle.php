<?php
function generatePascal($n)
{
    $result = [];
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            if ($j == 0) {
                $result[$i][] = 1;
            } else if ($i == $j) {
                $result[$i][] = 1;
            } else {
                $result[$i][] = $result[$i - 1][$j] + $result[$i - 1][$j - 1];
            }
        }
    }
    return $result;
}
$row = 5;
$res = generatePascal($row);
foreach ($res as $r) {
    foreach ($r as $l) {
        print ($l) . " ";
    }
    print("<br>");
}
