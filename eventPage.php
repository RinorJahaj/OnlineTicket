<?php
    require 'config/dbconnection.php';

    $query = $pdo->query('SELECT * from events LIMIT 3');
    $events = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style/style.css">
    <title>About Us</title>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
  

    <div class="container">
        <div class="cards">


            <?php foreach($events as $event): ?>
                <div class="card">
                <img src="img/<?php echo $event['image']; ?>" alt="s">
                <div class="card_detail">
                    <h3><?php echo $event['title']; ?></h3>
                    <p><?php echo $event['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
          
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
  

    <script src="menu.js"></script>
</body>

</html>