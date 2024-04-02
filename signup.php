<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viza's travel & tourism website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <section class="flex">

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>R</span>Register</a>

    <nav class="navbar">
       
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>


    </section>

</header>

<!-- header section ends -->

<!-- login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form id="signup-form" action="sign_up.php" method="post">
        <h3>Register</h3>
        <input type="email" name="email" class="box" placeholder="enter your email">
        <input type="password" name="password" class="box" placeholder="enter your password">
        <input type="submit" name="submit" value="SignUp now" class="btn">
        
        <p>Login in to your account <a href="index.php" target="_blank">Login Now</a></p>
    </form>

</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>