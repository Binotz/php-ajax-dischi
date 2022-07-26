<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="./assets/logo.png" alt="logo">
    </header>
    <main>
        <?php require_once __DIR__ . '/database.php' ?>

        <div class="container">
            <div class="cards-layout">
                <!-- Single card -->
                <?php foreach($database as $album){ ?>
                    <div class="card-layout">
                        <div class="card-content">
                            <img src="<?php echo $album['poster']?>" alt="Card cover">
                            <h3><?php echo $album['title']?></h3>
                            <h5><?php echo $album['author']?></h5>
                            <h5><?php echo $album['year']?></h5>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>
