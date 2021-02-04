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
            <!-- <div class="card">
                <img src="img/event2.jpg" alt="s">
                <div class="card_detail">
                    <h3>Las Vegas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quo corrupti quaerat ut nesciunt
                        ucimus sit temporibus voluptas sapiente
                        officia non qui.</p>
                </div>
            </div> -->

            <?php foreach($events as $event): ?>
                <div class="card">
                <img src="img/<?php echo $event['image']; ?>" alt="s">
                <div class="card_detail">
                    <h3><?php echo $event['title']; ?></h3>
                    <p><?php echo $event['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- <div class="card">
                <img src="img/event3.jpg" alt="s">
                <div class="card_detail">
                    <h3>Las Vegas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quo corrupti quaerat ut nesciunt
                        ucimus sit temporibus voluptas sapiente
                        officia non qui.</p>
                </div>
            </div>
            <div class="card">
                <img src="img/event2.jpg" alt="s">
                <div class="card_detail">
                    <h3>Las Vegas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quo corrupti quaerat ut nesciunt
                        ucimus sit temporibus voluptas sapiente
                        officia non qui.</p>
                </div>
            </div>
            <div class="card">
                <img src="img/event3.jpg" alt="s">
                <div class="card_detail">
                    <h3>Las Vegas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quo corrupti quaerat ut nesciunt
                        ucimus sit temporibus voluptas sapiente
                        officia non qui.</p>
                </div>
            </div> -->
        </div>
    </div>

    <footer class="footer">
        <div class="footer-inner container grid pt-3 pb-3">
            <div class="link__img">
                <img src="img/logoUbt.png" alt="">
            </div>
            <ul>
                <li>
                    <h3>Navigate</h3>
                </li>
                <li><a href="index.html">Home</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="aboutUs.html">About Us</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Demo the product</a></li>
            </ul>
            <ul>
                <li>
                    <h3>Legal</h3>
                </li>
                <li><a href="#">Term of use</a></li>
                <li><a href="#">Terms & conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Cookie policy</a></li>
            </ul>
            <ul>
                <li>
                    <h3>Company</h3>
                </li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">About OnlineTickets</a></li>
                <li><a href="#">Company news</a></li>
                <li><a href="#">Privacy at OnlineTickets</a></li>
                <li><a href="#">Inverstors</a></li>
            </ul>
        </div>
    </footer>

    <script src="menu.js"></script>
</body>

</html>