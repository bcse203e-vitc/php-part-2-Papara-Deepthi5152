<?php
$students = [
    "Rahul" => 85,
    "Priya" => 92,
    "Arun" => 78,
    "Sonia" => 95,
    "Vijay" => 88,
    "Kiran" => 75
];
arsort($students);
$top_students = array_slice($students, 0, 3, true);

echo "<h2>Top 3 Students</h2>";
echo "<table border='1' style='border-collapse: collapse; width: 300px;'>";
echo "<tr><th>Name</th><th>Marks</th></tr>";

foreach ($top_students as $name => $marks) {
    echo "<tr><td>" . htmlspecialchars($name) . "</td><td>" . htmlspecialchars($marks) . "</td></tr>";
}

echo "</table>";
?>
