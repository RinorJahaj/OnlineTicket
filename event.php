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
    


    <section class="showcase create-event pt-3">
        <div class="container grid">
            <div class="showcase-image__event">
                <img src="img/eventCreator.png" alt="">
            </div>
            <div class="showcase-text">
                <h1 class="pb-1">Hello, it's great to see that you're interested in creating events</h1>
                <p class="pb-3">Read our pricing policy.</p>
            </div>
        </div>
    </section>

    <section class="prices pt-5 pb-5">
        <div class="container">
            <div class="cards">
                <div class="card card1 center">
                    <div class="card_title">
                        <h3>Small</h3>
                        <h1>$0.39</h1>
                    </div>
                    <div class="card_detail">
                        <ul>
                            <li>Free case</li>
                            <li>Free case</li>
                            <li>Free case</li>
                            <li>Free case</li>
                        </ul>
                    </div>
                    <div class="card_button">
                        <button class="btn btn-primary">Create Event</button>
                    </div>
                </div>

                <div class="card card2 center">
                    <div class="card_title">
                        <h3>Medium</h3>
                        <h1>$0.29</h1>
                    </div>
                    <div class="card_detail">
                        <ul>
                            <li>Free case</li>
                            <li>Free case</li>
                            <li>Free case</li>
                            <li>Free case</li>
                        </ul>
                    </div>
                    <div class="card_button">
                        <button class="btn btn-primart">Create Event</button>
                    </div>
                </div>

                <div class="card card3 center">
                    <div class="card_title">
                        <h3>Large</h3>
                        <h1>$0.21</h1>
                    </div>
                    <div class="card_detail">
                        <ul>
                            <li>Free case</li>
                            <li>Free case</li>
                            <li>Free case</li>
                            <li>Free case</li>
                        </ul>
                    </div>
                    <div class="card_button">
                        <button class="btn btn-primart">Create Event</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <form class="form eventForm" id="form">
                <div class="form-control">
                    <label>Event Name</label>
                    <input type="text" placeholder="Event Name" name="name" id="eventname" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                </div>
                <div class="form-control">
                    <span>Date of Event</span>
                    <input type="date" id="date" min="2021-01-01" max="2021-12-31" required />
                </div>
                <div class="form-control">
                    <span>Time of Event</span>
                    <input type="time" id="time" required />
                </div>
                <div class="form-control">
                    <span>Select event size</span><br>
                    <input type="radio" id="large" name="range" value="large">
                    <label for="large">Large</label><br>
                    <input type="radio" id="medium" name="range" value="medium">
                    <label for="medium">Medium</label><br>
                    <input type="radio" id="small" name="range" value="small">
                    <label for="small">Small</label><br>
                    <input type="radio" id="other" name="range" value="other">
                    <label for="other">Other</label>
                </div>
                <div class="form-control">
                    <label>How did you find us ?</label>
                    <select name="find-us" id="find-us">
                        <option value="friends" selected>Friends</option>
                        <option value="search">Search engine</option>
                        <option value="ad">Advertisement</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-control">
                    <label>Newsletter ?</label>
                    <input type="checkbox" name="news" id="new" checked> Yes, please
                </div>
                <input type="submit" class="btn btn-submit" value="Submit" />
            </form>
        </div>
    </section>

    <div class="center pb-3 pt-3">
        <h2>Witness some magical moments <i class="fas fa-hat-wizard"></i></h2>
    </div>
    <section class="gallery container">
        <figure class="gallery__item gallery__item--1"><img src="img/event1.jpg" alt="Gallery image 1"
                class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--2"><img src="img/event2.jpg" alt="Gallery image 2"
                class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--3"><img src="img/event3.jpg" alt="Gallery image 3"
                class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--4"><img src="img/event4.jpg" alt="Gallery image 4"
                class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--5"><img src="img/event5.jpg" alt="Gallery image 5"
                class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--6"><img src="img/event6.jpg" alt="Gallery image 6"
                class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--7"><img src="img/event7.jpg" alt="Gallery image 7"
                class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--8"><img src="img/event5.jpg" alt="Gallery image 8"
                class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--9"><img src="img/event2.jpg" alt="Gallery image 9"
                class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--10"><img src="img/event4.jpg" alt="Gallery image 10"
                class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--11"><img src="img/event6.jpg" alt="Gallery image 11"
                class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--12"><img src="img/event1.jpg" alt="Gallery image 12"
                class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--13"><img src="img/event3.jpg" alt="Gallery image 13"
                class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--14"><img src="img/event7.jpg" alt="Gallery image 14"
                class="gallery__img"></figure>
    </section>

    <div class="container pt-3 pb-3">
        Submit the form to have these magical moments yourself.
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