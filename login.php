<?php 

session_start();

$check = (isset($_SESSION['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Best Burgers in Bikini Bottom - SpongeBob's Burger Joint">
    <meta name="description" content="Indulge in the tastiest burgers in Bikini Bottom at SpongeBob's Burger Joint. Inspired by the beloved character, our burgers are made with the freshest ingredients. Order now!">
    <meta name="keywords" content="SpongeBob, Bikini Bottom, Burgers, Restaurant, Fast Food, Takeout, Dine-in, Delivery, Batteries Not Included">
    <link rel="icon" type="image/x-icon" href="images/icon.ico">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Login</title>
</head>
<body>
    <!-- Nav Bar -->
    <div class="navbar">
        <a href="home.php"><img src="images/krustylogo.png" alt="logo" id="logo"></a>
        <label id="rest_name"><a href="home.php">Krusty Krabs</a></label>
        <?php if ($check) { ?>
        <label style="text-decoration: underline 1px black solid;text-underline-offset: 2px; margin-left: 5px;">Hello, <?php echo $_SESSION['firstname'] ?></label>
        <?php }?>
        <input type="checkbox" name="menu_active" id="menu_active">
        <label for="menu_active"><img src="images/menu.png" alt="Drop down list" id="menu"></label>

        
        <ul>
            <li class="navitems"><a href="home.php">Home</a></li>
            <li class="navitems"><a href="menu.php">Menu</a></li>

            <li class="navitems"><a href="login.php" class="active">Login</a></li>
            <li class="navitems"><a href="signup.php">Sign up</a></li>
        </ul>
    </div>
    <!-- Nav Bar -->

    <img src="images\bikinibottom.jpg" alt="Background" style="object-fit: cover;width: 100%;height: 100%;position: fixed;z-index: -100;filter: blur(5px);">

    <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        



    <form action="loginsession.php" method="post">
        <div class="logincontainer">

            <h1 class="logintitle">Log In Your Account</h1>
            
            <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>

            <div class="emailinput">
                <label for="email" id="email">Email</label>
                <input type="email" name="email" id="emailinput">
            </div>
            
            <div class="passwordinput">
                <label for="password" id="password">Password</label>
                <input type="password" name="password" id="passwordinput">
                <h1 id="forgot">forgot password?</h1>
            </div>

            <button type="submit">Login</button>

            <div class="signuprequest">
                <h2>Dont Have an account?</h2>
                <a href="signup.php">Signup now</a>
            </div>
        </div>
    </form>


<!-- Footer -->
<div class="navfooter">
        <div class="footerItems" style="display: flex; flex-direction: row;line-height: 60px; justify-content: space-around; ">
            <a href="contactus.php">Contact Us</a>
            <a href="menu.php">Order Now</a>
            <div class="copyright">© 2022 <span style="text-decoration: line-through;" class="amongus">Among Us</span> Krusty Krabs</div>
        </div>
<!-- Footer -->
    </div>
</body>
</html>