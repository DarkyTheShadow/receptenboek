    <?php include 'header.php';

    require 'connectie.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM recepten WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    $receptenboek = mysqli_fetch_assoc($result);
    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="page">
            <div class="mainpage">
                <div class="info">
                    Name <br> <?php echo $receptenboek['Naam'] ?>
                </div> <br> <br>
                <div class="info"> Menu Course <br> <?php echo $receptenboek['Menugang'] ?> </div><br> <br>
                <div class="info"> Ingredients <br> <?php echo $receptenboek['Aantal Ingredienten'] ?></div> <br> <br>
                <div class="info"> Costs <br> <?php echo $receptenboek['Kosten'] ?> Euro</div> <br> <br>
                <div class="info"> Recipe <br> <?php echo $receptenboek['Recept'] ?> </div><br> <br>
                <div class="info"> Difficulty <br> <?php echo $receptenboek['Moeilijkheidsgraad'] ?></div> <br> <br>
            </div>
            <div class="photo">
                <br> <img src="images/<?php echo $receptenboek['Afbeelding'] ?>" alt="recept-image"> <br>
            </div>
        </div>
    </body>

    </html>