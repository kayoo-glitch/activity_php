<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>Exploring Basic PHP Elements</h1>
    <p>By: Kay Nae Oo</p>
    <p>Date: 10/25/2026</p>

    <?php
    //The "integer" has a value of 4 & 6.
    $number1 = 4;
    $number2 = 6;
    //This is a string with the value of the activity name.
    $activityName = "Exploring Basic PHP Elements";
    //"$emptyVariable" is NULL, it has no value.
    $emptyVariable = NULL;


    function nameOfActivity($name) {
        echo "The name of this Activity is ".$name."<br/>";
        return;
    }
    function addition($four, $six) {
        return($four + $six);
    }

    nameOfActivity($activityName);
    addition($number1,$number2);

    echo "<h2>The name of this Activity is Exploring Basic PHP Elements</h2>";
    echo "<h2>10</h2>";

    echo "<p>Both JavaScript & PHP are similar in the fact that it lets websites be interactive.</p>";
    ?>
</body>
</html>
