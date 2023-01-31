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
    <link rel="stylesheet" href="CSS/contactus.css">
    <title>Contact us</title>
</head>
<body>
    <div class="navbar">
        <a href="home.php"><img src="images/krustylogo.png" alt="logo" id="logo"></a>
        <label id="rest_name"><a href="home.php">Krusty Krabs</a></label>
        <?php if ($check) { ?>
        <label style="text-decoration: underline 1px black solid;text-underline-offset: 2px; margin-left: 5px;">Hello, <?php echo $_SESSION['firstname'] ?></label>
        <?php }?>
        <input type="checkbox" name="menu_active" id="menu_active">
        <label for="menu_active"><img src="images/menu.png" alt="drop downlist" id="menu"></label>
        
        <ul>
            <li class="navitems"><a href="home.php">Home</a></li>
            <li class="navitems"><a href="menu.php">Menu</a></li>

            <?php if($check){ ?>
            <li class="navitems" id="opencart"><a>Cart</a></li>
            <li class="navitems"><a href="accountinfo.php">Account</a></li>
            <li class="navitems"><a href="logout.php">Logout</a></li>
            <?php }
            else{ ?>
            <li class="navitems"><a href="login.php">Login</a></li>
            <li class="navitems"><a href="signup.php">Sign up</a></li>
            <?php } ?>
        </ul>
    </div>



    
    <img src="images/contactus.jpg" alt="background" id="background">
    <div id="formbody">
    <div class="formcontact">
        <form action="contactussession.php" method="post">
            <header style="font-size: x-large;font-weight: 600;">Contact us</header>
            <div class="name">
            <input type="text" name="firstname" id="firstname" placeholder="First Name" class="items" required>
            <input type="text" name="lastname" id="last name" placeholder="Last Name" class="items" required>
            </div>
            <input type="email" name="email" id="email" placeholder="Email" class="items" required>
            <input type="text" name="phone" id="phone" placeholder="Phone number:- (079123456)" required minlength="10" maxlength="10" class="items" required>
            <input type="text" name="address" id="address" placeholder="Address" class="items" required>
            <select name="inquire" id="inquire" class="items" required>
                <option value="" selected disabled hidden>What are you inquiring us about?</option>
                <option value="fquality">Food Quality</option>
                <option value="squality">Service Quality</option>
                <option value="other">Other</option>
            </select>
            <textarea name="infoproblem" id="infoproblem" cols="30" rows="10" class="items" style="max-width: 90%; min-width: 90%; height: 100px; padding-top: 10px;" required placeholder="Tell us more about your problem."></textarea>
            <label for="submit" id="submit_button">Submit</label>
            <input type="submit" name="submit" id="submit" style="display: none;">
        </form>
    </div>
    </div>
    
    
    <?php if($check){
        include("cart.php");} ?>


    <!-- Footer -->
    <div class="navfooter">
        <div class="footerItems" style="display: flex; flex-direction: row;line-height: 60px; justify-content: space-around; ">
            <a href="contactus.php">Contact Us</a>
            <a href="menu.php">Order Now</a>
            <div class="copyright">© 2022 <span style="text-decoration: line-through;">Among Us</span> Krusty Krabs</div>
        </div>
<!-- Footer -->
</div>

</body>
</html>