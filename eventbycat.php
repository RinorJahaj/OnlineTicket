<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style/style.css">
    <title>Categories</title>
</head>

<body>
    <?php
    if(!isset($_GET['catId']) || $_GET['catId'] == NULL ) {
    echo "<script>window.location = '404.php'; </script>";
    } else {
    $id = $_GET['catId'];
    }
    ?>

    <?php 
    include 'includes/navbar.php';
    ?>

    <div class="main">
        <div class="container">

            <?php
            $eventbycat = $ev->eventByOnlyCat($id);
            if($eventbycat) {
                while($result = $eventbycat->fetch_assoc()) {

            ?>

            <h2 class="mt-3">Events from <?php echo $result['catName'] . " Category"; ?></h2>
            <?php } } ?>

            <?php
            $eventbycat = $ev->eventByCat($id);
            if($eventbycat) {
                while($result = $eventbycat->fetch_assoc()) {

            ?>

            <div class="mt-3 cards">
                <div class="card">
                    <a href="preview.php?eventid=<?php echo $result['eventId']?>">
                        <img src="admin/<?php echo $result['image']; ?>" alt="">
                    </a>
                    <div class="card_detail center">
                        <h2><?php echo $result['eventName']; ?></h2>
                        <p><?php echo $fm->textShorten($result['body'], 50);  ?></p>
                        <p><?php echo $result['price']. "$"; ?></p>
                    </div>
                </div>
            </div>
            <?php } } else {
                echo "There is no event of this category";
            } ?>

        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>

</html>