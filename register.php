<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style/style.css">
    <title>Your dream event is one step away</title>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>


    <section class="showcase pt-3">
        <div class="container grid gg">
            <div class="showcase-image">
                <img src="img/event.png" alt="">
            </div>
            <div class="showcase-text">
                <h1 class="large">Sign Up</h1>
                <p class="pt-1"><i class="fas fa-user"></i> Create Your Account</p>
                <form class="form" id="form">
                    <div class="form-control">
                        <input type="text" placeholder="Name" name="name" id="username" />
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <div class="form-control">
                        <input type="email" placeholder="Email Address" id="email" />
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <div class="form-control">
                        <input type="password" placeholder="Password" id="password" />
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <div class="form-control">
                        <input type="password" placeholder="Confirm Password" id="password2" />
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <input type="submit" class="btn btn-submit" value="Register" />
                </form>
                <span>
                    Already have an account? <a href="login.php">Sign In</a>
                </span>
            </div>
        </div>
    </section>

    <script src="validation.js"></script>
    <script src="menu.js"></script>
</body>

</html>