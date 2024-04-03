<?php
require 'connectie.php';
$sql = "SELECT COUNT(*) AS count, Menugang FROM recepten GROUP BY Menugang ORDER BY COUNT(*) DESC LIMIT 20";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$Menugang = $row['Menugang'];
$recepten_aantal = $row['count'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="navbar">
            <p class="navbar_title">Alecs's Carabian Recipes</p>
            <a href="recepten.php">Home</a>
           
            <p>Number of recipes: <?php echo $recepten_aantal ?></p>
            <p>Most chosen Recipe: <?php echo $Menugang ?></p>
        </div>
    </nav>
</body>

</html>