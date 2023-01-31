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
    <title>Home</title>
    <link rel="stylesheet" href="CSS/home.css">
</head>
<body>
    <div class="navbar">
        <a href="home.php"><img src="images/krustylogo.png" alt="logo" id="logo"></a>
        <label id="rest_name"><a href="home.php">Krusty Krabs</a></label>
        <?php if ($check) { ?>
        <label style="text-decoration: underline 1px black solid;text-underline-offset: 2px; margin-left: 5px;">Hello, <?php echo $_SESSION['firstname'] ?></label>
        <?php }?>
        <input type="checkbox" name="menu_active" id="menu_active">
        <label for="menu_active"><img src="images/menu.png" alt="drop down list" id="menu"></label>
        
        <ul>
            <li class="navitems"><a href="home.php" class="active">Home</a></li>
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

    <div class="vidContainer">
    
        <video src="videos/main.mp4" loop autoplay type="video/mp4" class="mainVideo"></video>
        



        <div class="overlayText">
            <img src="images\krustylogo.png" alt="Store Logo" style="height: 125px;margin: auto;display: block;">
            <h1 id="topText">Krusty Krabs</h1>
            <h2 id="botText">The Home To The Secret Krabby Patty</h2>
        </div>
    </div>

    <!-- Body start -->
    <div class="body-container">

        <!-- Body Text Start -->
        <div class="body-text">
            <div class="body-header1">SERVING REAL FOOD, FAST!
            </div>
            <div class="body-text" >Krabby Patties are the ultimate delicacy for any "SpongeBob SquarePants" fan. These delectable sandwiches are made with a secret recipe that's sure to please even the pickiest of palates. They're definitely not crabs🗿, but they're so tasty, you won't even care. Just one bite and you'll be hooked, and you'll find yourself singing "Krabby Patties, yum yum yum, they're so delicious and fun!"</div>
        </div>
        <!-- Body Text End -->

        <!-- Banners Div start -->
        <div class="body-banners">

            <div class="joinContainer">
                <img src="images/krabbypatty.jpg" alt="Click to Join" id="krabbyImg">

                <div class="joinHeader">
                    <a href="<?php if($check){?>menu.php<?php } else{?>signup.php<?php }?>" style="color: black;text-shadow: none;">
                    <h4 class="joinbodyheader">Get Hooked on Krabby Patties!</h4>
                    <p class=joinbodytext>Click now to access our menu and satisfy your cravings!</p>
                    </a>
                </div>
            </div>

            <!-- Menu banner Start -->
            <div class="menuContainer">
                <img src="images/menu.jpg" alt="Click to View Menu" id="menuBannerImg">

                <!-- Menu Banner Footer Start -->
                <div class="menuHeader">
                    <a href="menu.php" style="color: black;text-shadow: none;">
                    <h4 class="menubodyheader">Join the Krabby Patty Craze!</h4>
                    <p class="menubodytext">Join the fan club, get deals and be closer to uncovering the secret recipe. Don't miss out, become a member today!</p>
                    </a>
                </div>
            </div>
            <!-- Menu banner end -->

        </div>
        <!-- Banner Div end -->

    </div>
   
<!-- Footer -->
    <div class="navfooter">
        <div class="footerItems" style="display: flex; flex-direction: row;line-height: 60px; justify-content: space-around; ">
            <a href="contactus.php">Contact Us</a>
            <a href="menu.php">Order Now</a>
            <div class="copyright">© 2022 <span style="text-decoration: line-through;" class="amongus">Among Us</span> Krusty Krabs</div>
        </div>
<!-- Footer -->
    </div>
    

    <?php 
    if($check){
        include("cart.php");
    }?>
</body>
</html>