<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Random Number Assignment</title>
</head>
<body>
     
	<h1>Random Number Assignment</h1>

    <?php
    // a) 1 ≤ n ≤ 650
    $n1 = rand(1, 650);
    echo "<p>Random number (1 ≤ n ≤ 650): $n1</p>";

    // b) 1 ≤ n ≤ 280
    $n2 = rand(1, 280);
    echo "<p>Random number (1 ≤ n ≤ 280): $n2</p>";

    // c) 0 ≤ n ≤ 799
    $n3 = rand(0, 799);
    echo "<p>Random number (0 ≤ n ≤ 799): $n3</p>";

    // d) 6000 ≤ n ≤ 8035
    $n4 = rand(6000, 8035);
    echo "<p>Random number (6000 ≤ n ≤ 8035): $n4</p>";

    // e) -17 ≤ n ≤ 99
    $n5 = rand(-17, 99);
    echo "<p>Random number (-17 ≤ n ≤ 99): $n5</p>";
    ?>

</body>
</html>
