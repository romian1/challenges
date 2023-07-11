<?php
function calculateAverage($numbers) {
    $sum = 0;
    $count = 0;

    foreach ($numbers as $number) {
        $sum += $number;
        $count ++;
    }

    $average = $sum / $count;
    return $average;
}

$numbers = [2,4,6,8,10];
$result = calculateAverage($numbers);
print_r($numbers);
echo "Average: " . $result;

?>
