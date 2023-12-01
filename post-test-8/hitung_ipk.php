<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $semester1 = $_POST["semester1"];
    $semester2 = $_POST["semester2"];
    $semester3 = $_POST["semester3"];
    $semester4 = $_POST["semester4"];

    $cumulative = ($semester1 + $semester2 + $semester3 + $semester4) / 4;

    if ($cumulative >= 3.9 && $cumulative <= 4) {
        $status = "Lulus dengan status Sugma Cum Laude";
    } elseif ($cumulative >= 3.79 && $cumulative < 3.9) {
        $status = "Lulus dengan status Magna Cum Laude";
    } elseif ($cumulative >= 3.5 && $cumulative < 3.79) {
        $status = "Lulus dengan status Cum Laude";
    } elseif ($cumulative > 1) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Semester 1</th>";
    echo "<th>Semester 2</th>";
    echo "<th>Semester 3</th>";
    echo "<th>Semester 4</th>";
    echo "<th>Cumulative</th>";
    echo "<th>Status</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$semester1</td>";
    echo "<td>$semester2</td>";
    echo "<td>$semester3</td>";
    echo "<td>$semester4</td>";
    echo "<td>$cumulative</td>";
    echo "<td>$status</td>";
    echo "</tr>";
    echo "</table>";
}
