<?php
class AverageCalculationException extends Exception {}

function calculateAverage(array $numbers) {
    if (empty($numbers)) {
        throw new AverageCalculationException("No numbers provided. Cannot calculate average of an empty array.");
    }

    $sum = array_sum($numbers);
    $count = count($numbers);
    
    return $sum / $count;
}

$test_arrays = [
    [10, 20, 30, 40, 50], 
    [],                   
    [5, 15, 25]          
];

echo "<h2>Average Calculation</h2>";

foreach ($test_arrays as $key => $numbers) {
    echo "Test " . ($key + 1) . ": Array [" . implode(', ', $numbers) . "] - ";
    try {
        $average = calculateAverage($numbers);
        echo "<span style='color: green;'>Average: **" . number_format($average, 2) . "**</span><br>";
    } catch (AverageCalculationException $e) {
      
        echo "<span style='color: red;'>Error: " . htmlspecialchars($e->getMessage()) . "</span><br>";
    }
}
?>
