<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style/style.css" />
    <title>Online Tickets</title>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>


    <section class="showcase">
        <div class="container grid">
            <div class="showcase-image">
                <img src="img/showcase.webp" alt="">
            </div>
            <div class="showcase-text">
                <h1 class="pb-1">Your dream event never been closer.</h1>
                <p class="pb-3">Whether it’s your first event ever, or your biggest event yet, we make it simple to sell
                    tickets
                    online.</p>
                <a href="#" class="btn">Create your event</a>
            </div>
        </div>
    </section>

    <section class="infos mt-3">
        <div class="container grid center">
            <div class="info">
                <i class="far fa-grin-hearts fa-5x"></i>
                <h2 class="pt-1">Loved Ones</h2>
                <p>Our customers love what we do and give us the reviews to prove it.</p>
            </div>
            <div class="info">
                <i class="fas fa-piggy-bank fa-5x"></i>
                <h2 class="pt-1">Unbeatable value</h2>
                <p>Service, support and features that are a cut above. Prices that are a cut below.</p>
            </div>
            <div class="info">
                <i class="fas fa-hand-holding-heart fa-5x"></i>
                <h2 class="pt-1">Made for you</h2>
                <p>From charities to corporate events – our platform works for everyone.</p>
            </div>
        </div>
    </section>

    <section class="presentation pt-5 pb-5">
        <h2 class="center">World's best site for selling tickets</h2>
        <div class="container center flex__2 pt-3">
            <div>
                <i class="fas fa-ticket-alt fa-2x"></i>
                <h2 class="pt-min">5m</h2>
                <p>Tickets sold</p>
            </div>
            <div>
                <i class="fas fa-glass-cheers fa-2x"></i>
                <h2 class="pt-min">20,000</h2>
                <p>Event organisers</p>
            </div>
            <div>
                <i class="fas fa-globe-europe fa-2x"></i>
                <h2 class="pt-min">115</h2>
                <p>Countries</p>
            </div>
        </div>
    </section>

    <!-- <section class="sliders">
        <div class="container">
            <img src="img/biznes.jpg" alt="business" id="slider">
            <ul class="sliders__navigation">
                <li onclick="imgSlider('img/eventi.jpg')"><img src="img/eventi.jpg" alt="event"></li>
                <li onclick="imgSlider('img/koncert.jpg')"><img src="img/koncert.jpg" alt="event"></li>
                <li onclick="imgSlider('img/biznes.jpg')"><img src="img/biznes.jpg" alt="event"></li>
            </ul>
        </div>
    </section> -->

    <section class="users slider pt-3 pb-3">
        <div class="container">

            <div class="slide current">
                <div class="user grid">
                    <div class="user__img">
                        <img src="img/rinor.jpg" alt="rinor" id="slider">
                    </div>
                    <div class="user__text">
                        <p class="pb-1">
                            “I have tried all the major ticketing sites for my film festival and found Online Tickets to
                            be
                            head and shoulders above the competition. The site is exceptionally user-friendly.”</p>
                        <h4 class="pb-min">Rinor Jahaj from University for Business and Technology</h4>
                        <h4>Pristine, Kosovo</h4>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="user grid">
                    <div class="user__img">
                        <img src="img/shpetim.jpg" alt="rinor" id="slider">
                    </div>
                    <div class="user__text">
                        <p class="pb-1">
                            “I have tried all the major ticketing sites for my film festival and found Online Tickets to
                            be
                            head and shoulders ”</p>
                        <h4 class="pb-min">Shpetim Buqa from University for Business and Technology</h4>
                        <h4>Pristine, Kosovo</h4>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="user grid">
                    <div class="user__img">
                        <img src="img/arber.jpg" alt="rinor" id="slider">
                    </div>
                    <div class="user__text">
                        <p class="pb-1">
                            “I have tried all the major ticketing sites for my film festival and found Online Tickets to
                            be
                            head.”</p>
                        <h4 class="pb-min">Arton Ramadani Jahaj from University for Business and Technology</h4>
                        <h4>Pristine, Kosovo</h4>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <button id="prev">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button id="next">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>

    <section class="party">
        <div class="container">
            <img src="img/banner (4).jpg" alt="">
            <h1 class="center pt-1 pb-5 pt-3">Let's party, amigooo &#119136;</h1>

            <div class="grid pb-8">
                <img src="img/teamwork.png" alt="">
                <div>
                    <h3 class="pb-1">An experience you'll never forget</h3>
                    <h1 class="pb-1">A closer world</h1>
                    <p>Whether you're a theatre, stadium, intimate music venue, church, gala or concert hall, our
                        seating
                        chart tool will accurately represent your venue and seating layout.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="center">
            <h1 class="large pb-3">Ready to work with our team ?</h1>
            <a href="#" class="btn">Contact Us</a>
        </div>
    </section>

    <section class="social pt-1 pb-3">
        <div class="container social__links">
            <h2 class="pr-3">Follow Us</h2>
            <a href="https://facebook.com" target="_blank" rel="noopener">
                <i class="fab fa-facebook fa-2x"></i>
            </a>
            <a href="https://instagram.com" target="_blank" rel="noopener">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="https://ubt-uni.net" target="_blank" rel="noopener">
                <i class="fab fa-chrome fa-2x"></i>
            </a>
        </div>
    </section>

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

    <script src="main.js"></script>
    <script src="menu.js"></script>
</body>

</html>