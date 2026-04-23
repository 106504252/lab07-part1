<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>

<?php
    $days = array ("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    echo "<p>The days of the week in English are:</p>";
    echo "$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6].";
    $daysf = array ("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    echo "<p>The days of the week in French are:</p>";
    echo "$daysf[0], $daysf[1], $daysf[2], $daysf[3], $daysf[4], $daysf[5], $daysf[6].";
?>
</body>
</html>